<?php
include_once \dirname(__DIR__, 4).'/vendor/friends-of-behat/mink/src/Session.php';

class Session_4e1eb92 extends \Behat\Mink\Session implements \ProxyManager\Proxy\VirtualProxyInterface
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

    public function isStarted()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'isStarted', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->isStarted();
    }

    public function start()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'start', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->start();
    }

    public function stop()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'stop', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->stop();
    }

    public function restart()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'restart', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->restart();
    }

    public function reset()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'reset', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->reset();
    }

    public function getDriver()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getDriver', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getDriver();
    }

    public function getPage()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getPage', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getPage();
    }

    public function getSelectorsHandler()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getSelectorsHandler', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getSelectorsHandler();
    }

    public function visit($url)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'visit', array('url' => $url), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->visit($url);
    }

    public function setBasicAuth($user, $password = '')
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'setBasicAuth', array('user' => $user, 'password' => $password), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->setBasicAuth($user, $password);
    }

    public function setRequestHeader($name, $value)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'setRequestHeader', array('name' => $name, 'value' => $value), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->setRequestHeader($name, $value);
    }

    public function getResponseHeaders()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getResponseHeaders', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getResponseHeaders();
    }

    public function getResponseHeader($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getResponseHeader', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getResponseHeader($name);
    }

    public function setCookie($name, $value = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'setCookie', array('name' => $name, 'value' => $value), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->setCookie($name, $value);
    }

    public function getCookie($name)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getCookie', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getCookie($name);
    }

    public function getStatusCode()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getStatusCode', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getStatusCode();
    }

    public function getCurrentUrl()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getCurrentUrl', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getCurrentUrl();
    }

    public function getScreenshot()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getScreenshot', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getScreenshot();
    }

    public function getWindowNames()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getWindowNames', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getWindowNames();
    }

    public function getWindowName()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'getWindowName', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->getWindowName();
    }

    public function reload()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'reload', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->reload();
    }

    public function back()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'back', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->back();
    }

    public function forward()
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'forward', array(), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->forward();
    }

    public function switchToWindow($name = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'switchToWindow', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->switchToWindow($name);
    }

    public function switchToIFrame($name = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'switchToIFrame', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->switchToIFrame($name);
    }

    public function executeScript($script)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'executeScript', array('script' => $script), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->executeScript($script);
    }

    public function evaluateScript($script)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'evaluateScript', array('script' => $script), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->evaluateScript($script);
    }

    public function wait($time, $condition = 'false')
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'wait', array('time' => $time, 'condition' => $condition), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->wait($time, $condition);
    }

    public function resizeWindow($width, $height, $name = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'resizeWindow', array('width' => $width, 'height' => $height, 'name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->resizeWindow($width, $height, $name);
    }

    public function maximizeWindow($name = null)
    {
        $this->initializer64411 && ($this->initializer64411->__invoke($valueHolderbe5d7, $this, 'maximizeWindow', array('name' => $name), $this->initializer64411) || 1) && $this->valueHolderbe5d7 = $valueHolderbe5d7;

        return $this->valueHolderbe5d7->maximizeWindow($name);
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

        $instance->initializer64411 = $initializer;

        return $instance;
    }

    public function __construct(\Behat\Mink\Driver\DriverInterface $driver, ?\Behat\Mink\Selector\SelectorsHandler $selectorsHandler = null)
    {
        static $reflection;

        if (! $this->valueHolderbe5d7) {
            $reflection = $reflection ?? new \ReflectionClass('Behat\\Mink\\Session');
            $this->valueHolderbe5d7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);

        }

        $this->valueHolderbe5d7->__construct($driver, $selectorsHandler);
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
        \Closure::bind(function (\Behat\Mink\Session $instance) {
            unset($instance->driver, $instance->page, $instance->selectorsHandler);
        }, $this, 'Behat\\Mink\\Session')->__invoke($this);
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
