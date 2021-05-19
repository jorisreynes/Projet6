<?php

namespace ContainerXC8maXd;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{

    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder25ead = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1646b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa0921 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        if ($this->valueHolder25ead === $returnValue = $this->valueHolder25ead->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer1646b = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder25ead) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder25ead = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__get', ['name' => $name], $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        if (isset(self::$publicPropertiesa0921[$name])) {
            return $this->valueHolder25ead->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ead;

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

        $targetObject = $this->valueHolder25ead;
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
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ead;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder25ead;
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
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__isset', array('name' => $name), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ead;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder25ead;
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
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__unset', array('name' => $name), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder25ead;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder25ead;
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
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__clone', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        $this->valueHolder25ead = clone $this->valueHolder25ead;
    }

    public function __sleep()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__sleep', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return array('valueHolder25ead');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1646b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1646b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'initializeProxy', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder25ead;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder25ead;
    }


}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
