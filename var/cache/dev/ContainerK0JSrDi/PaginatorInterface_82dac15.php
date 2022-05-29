<?php

namespace ContainerK0JSrDi;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9f0fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd8747 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb9aa6 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        if ($this->valueHolder9f0fd === $returnValue = $this->valueHolder9f0fd->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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
        $instance   = $reflection->newInstanceWithoutConstructor();

        $instance->initializerd8747 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder9f0fd) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder9f0fd = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__get', ['name' => $name], $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        if (isset(self::$publicPropertiesb9aa6[$name])) {
            return $this->valueHolder9f0fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0fd;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f0fd;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9f0fd;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__isset', array('name' => $name), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9f0fd;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__unset', array('name' => $name), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f0fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9f0fd;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__clone', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        $this->valueHolder9f0fd = clone $this->valueHolder9f0fd;
    }

    public function __sleep()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__sleep', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return array('valueHolder9f0fd');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8747 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8747;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'initializeProxy', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f0fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f0fd;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
