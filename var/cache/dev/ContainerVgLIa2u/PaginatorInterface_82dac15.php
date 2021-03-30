<?php

namespace ContainerVgLIa2u;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb8cf0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfe34b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties03422 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        if ($this->valueHolderb8cf0 === $returnValue = $this->valueHolderb8cf0->paginate($target, $page, $limit, $options)) {
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

        $instance->initializerfe34b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderb8cf0) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderb8cf0 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__get', ['name' => $name], $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        if (isset(self::$publicProperties03422[$name])) {
            return $this->valueHolderb8cf0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8cf0;

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

        $targetObject = $this->valueHolderb8cf0;
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
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8cf0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb8cf0;
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
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__isset', array('name' => $name), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8cf0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb8cf0;
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
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__unset', array('name' => $name), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb8cf0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb8cf0;
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
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__clone', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        $this->valueHolderb8cf0 = clone $this->valueHolderb8cf0;
    }

    public function __sleep()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__sleep', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return array('valueHolderb8cf0');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfe34b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfe34b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'initializeProxy', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb8cf0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb8cf0;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
