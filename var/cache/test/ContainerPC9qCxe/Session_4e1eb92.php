<?php
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/mink/src/Session.php';

class Session_4e1eb92 extends \Behat\Mink\Session implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function isStarted()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'isStarted', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->isStarted();
    }

    public function start()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'start', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->start();
    }

    public function stop()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'stop', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->stop();
    }

    public function restart()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'restart', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->restart();
    }

    public function reset()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'reset', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->reset();
    }

    public function getDriver()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getDriver', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getDriver();
    }

    public function getPage()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getPage', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getPage();
    }

    public function getSelectorsHandler()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getSelectorsHandler', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getSelectorsHandler();
    }

    public function visit($url)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'visit', array('url' => $url), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->visit($url);
    }

    public function setBasicAuth($user, $password = '')
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'setBasicAuth', array('user' => $user, 'password' => $password), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->setBasicAuth($user, $password);
    }

    public function setRequestHeader($name, $value)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'setRequestHeader', array('name' => $name, 'value' => $value), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->setRequestHeader($name, $value);
    }

    public function getResponseHeaders()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getResponseHeaders', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getResponseHeaders();
    }

    public function getResponseHeader($name)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getResponseHeader', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getResponseHeader($name);
    }

    public function setCookie($name, $value = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'setCookie', array('name' => $name, 'value' => $value), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->setCookie($name, $value);
    }

    public function getCookie($name)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getCookie', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getCookie($name);
    }

    public function getStatusCode()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getStatusCode', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getStatusCode();
    }

    public function getCurrentUrl()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getCurrentUrl', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getCurrentUrl();
    }

    public function getScreenshot()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getScreenshot', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getScreenshot();
    }

    public function getWindowNames()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getWindowNames', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getWindowNames();
    }

    public function getWindowName()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'getWindowName', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->getWindowName();
    }

    public function reload()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'reload', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->reload();
    }

    public function back()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'back', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->back();
    }

    public function forward()
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'forward', array(), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->forward();
    }

    public function switchToWindow($name = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'switchToWindow', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->switchToWindow($name);
    }

    public function switchToIFrame($name = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'switchToIFrame', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->switchToIFrame($name);
    }

    public function executeScript($script)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'executeScript', array('script' => $script), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->executeScript($script);
    }

    public function evaluateScript($script)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'evaluateScript', array('script' => $script), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->evaluateScript($script);
    }

    public function wait($time, $condition = 'false')
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'wait', array('time' => $time, 'condition' => $condition), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->wait($time, $condition);
    }

    public function resizeWindow($width, $height, $name = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'resizeWindow', array('width' => $width, 'height' => $height, 'name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->resizeWindow($width, $height, $name);
    }

    public function maximizeWindow($name = null)
    {
        $this->initializer0990e && ($this->initializer0990e->__invoke($valueHolder18e3a, $this, 'maximizeWindow', array('name' => $name), $this->initializer0990e) || 1) && $this->valueHolder18e3a = $valueHolder18e3a;

        return $this->valueHolder18e3a->maximizeWindow($name);
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

        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $instance, 'Behat\\Mink\\Session')->__invoke($instance);

        $instance->initializer0990e = $initializer;

        return $instance;
    }

    public function __construct(\Behat\Mink\Driver\DriverInterface $driver, ?\Behat\Mink\Selector\SelectorsHandler $selectorsHandler = null)
    {
        static $reflection;

        if (! $this->valueHolder18e3a) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Session');
            $this->valueHolder18e3a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);

        }

        $this->valueHolder18e3a->__construct($driver, $selectorsHandler);
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
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);
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
