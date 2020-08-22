<?php

include_once\dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/IOAuth2.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/oauth2-php/lib/OAuth2.php';
class OAuth2_5885b82 extends \OAuth2\OAuth2 implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldere0c4e = null;
    private $initializer9448e = null;
    private static $publicPropertiesf4e81 = [
        
    ];
    public function getVariable($name, $default = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getVariable', array('name' => $name, 'default' => $default), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getVariable($name, $default);
    }
    public function setVariable($name, $value)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'setVariable', array('name' => $name, 'value' => $value), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->setVariable($name, $value);
    }
    public function verifyAccessToken($tokenParam, $scope = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'verifyAccessToken', array('tokenParam' => $tokenParam, 'scope' => $scope), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->verifyAccessToken($tokenParam, $scope);
    }
    public function getBearerToken(?\Symfony\Component\HttpFoundation\Request $request = null, $removeFromRequest = false)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'getBearerToken', array('request' => $request, 'removeFromRequest' => $removeFromRequest), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->getBearerToken($request, $removeFromRequest);
    }
    public function grantAccessToken(?\Symfony\Component\HttpFoundation\Request $request = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'grantAccessToken', array('request' => $request), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->grantAccessToken($request);
    }
    public function finishClientAuthorization($isAuthorized, $data = null, ?\Symfony\Component\HttpFoundation\Request $request = null, $scope = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'finishClientAuthorization', array('isAuthorized' => $isAuthorized, 'data' => $data, 'request' => $request, 'scope' => $scope), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->finishClientAuthorization($isAuthorized, $data, $request, $scope);
    }
    public function createAccessToken(\OAuth2\Model\IOAuth2Client $client, $data, $scope = null, $access_token_lifetime = null, $issue_refresh_token = true, $refresh_token_lifetime = null)
    {
        $this->initializer9448e && ($this->initializer9448e->__invoke($valueHoldere0c4e, $this, 'createAccessToken', array('client' => $client, 'data' => $data, 'scope' => $scope, 'access_token_lifetime' => $access_token_lifetime, 'issue_refresh_token' => $issue_refresh_token, 'refresh_token_lifetime' => $refresh_token_lifetime), $this->initializer9448e) || 1) && $this->valueHoldere0c4e = $valueHoldere0c4e;
        return $this->valueHoldere0c4e->createAccessToken($client, $data, $scope, $access_token_lifetime, $issue_refresh_token, $refresh_token_lifetime);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance = $reflection->newInstanceWithoutConstructor();
        unset($instance->conf, $instance->storage, $instance->oldRefreshToken, $instance->usedAuthCode);
        $instance->initializer9448e = $initializer;
        return $instance;
    }
    public function __construct(\OAuth2\IOAuth2Storage $storage, $config = [])
    {
        static $reflection;
        if (! $this->valueHoldere0c4e) {
            $reflection = $reflection ?? new \ReflectionClass('OAuth2\\OAuth2');
            $this->valueHoldere0c4e = $reflection->newInstanceWithoutConstructor();
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);
        }
        $this->valueHoldere0c4e->__construct($storage, $config);
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
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);
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
