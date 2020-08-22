<?php

include_once\dirname(__DIR__, 4).'/vendor/symfony/security/Core/User/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UserProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/AbstractUserProvider.php';
include_once \dirname(__DIR__, 4).'/vendor/sylius/sylius/src/Sylius/Bundle/UserBundle/Provider/UsernameOrEmailProvider.php';
class UsernameOrEmailProvider_3eaa26a extends \Sylius\Bundle\UserBundle\Provider\UsernameOrEmailProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere0c4e = null;
    private $initializer9448e = null;
    private static $publicPropertiesf4e81 = [
        
    ];
    public function loadUserByUsername($username) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'loadUserByUsername', array('username' => $username), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->loadUserByUsername($username);
    }
    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user) : \Symfony\Component\Security\Core\User\UserInterface
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'refreshUser', array('user' => $user), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->refreshUser($user);
    }
    public function supportsClass($class) : bool
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'supportsClass', array('class' => $class), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->supportsClass($class);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        unset($instance->supportedUserClass, $instance->userRepository, $instance->canonicalizer);
        $instance->initializer9448e = $initializer;
        return $instance;
    }
    public function __construct(string $supportedUserClass, \Sylius\Component\User\Repository\UserRepositoryInterface $userRepository, \Sylius\Component\User\Canonicalizer\CanonicalizerInterface $canonicalizer)
    {
        static $reflection;
        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('Sylius\\Bundle\\UserBundle\\Provider\\UsernameOrEmailProvider');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);
        }
        $this->valueHoldere0c4e->__construct($supportedUserClass, $userRepository, $canonicalizer);
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
        unset($this->supportedUserClass, $this->userRepository, $this->canonicalizer);
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
