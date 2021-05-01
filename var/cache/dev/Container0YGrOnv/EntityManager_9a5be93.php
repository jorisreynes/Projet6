<?php

namespace Container0YGrOnv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getConnection', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getMetadataFactory', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getExpressionBuilder', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'beginTransaction', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getCache', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'transactional', array('func' => $func), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->transactional($func);
    }

    public function commit()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'commit', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->commit();
    }

    public function rollback()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'rollback', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getClassMetadata', array('className' => $className), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'createQuery', array('dql' => $dql), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'createNamedQuery', array('name' => $name), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'createQueryBuilder', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'flush', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'clear', array('entityName' => $entityName), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->clear($entityName);
    }

    public function close()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'close', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->close();
    }

    public function persist($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'persist', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'remove', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'refresh', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'detach', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'merge', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'contains', array('entity' => $entity), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getEventManager', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getConfiguration', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'isOpen', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getUnitOfWork', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getProxyFactory', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'initializeObject', array('obj' => $obj), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'getFilters', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'isFiltersStateClean', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, 'hasFilters', array(), $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        return $this->valueHolderb8cf0->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerfe34b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb8cf0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb8cf0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb8cf0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfe34b && ($this->initializerfe34b->__invoke($valueHolderb8cf0, $this, '__get', ['name' => $name], $this->initializerfe34b) || 1) && $this->valueHolderb8cf0 = $valueHolderb8cf0;

        if (isset(self::$publicProperties03422[$name])) {
            return $this->valueHolderb8cf0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
