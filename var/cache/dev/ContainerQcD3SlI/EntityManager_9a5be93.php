<?php

namespace ContainerQcD3SlI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4c0da = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5c886 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties40711 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getConnection', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getMetadataFactory', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getExpressionBuilder', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'beginTransaction', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getCache', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'transactional', array('func' => $func), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->transactional($func);
    }

    public function commit()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'commit', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->commit();
    }

    public function rollback()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'rollback', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getClassMetadata', array('className' => $className), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'createQuery', array('dql' => $dql), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'createNamedQuery', array('name' => $name), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'createQueryBuilder', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'flush', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'clear', array('entityName' => $entityName), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->clear($entityName);
    }

    public function close()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'close', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->close();
    }

    public function persist($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'persist', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'remove', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'refresh', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'detach', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'merge', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'contains', array('entity' => $entity), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getEventManager', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getConfiguration', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'isOpen', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getUnitOfWork', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getProxyFactory', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'initializeObject', array('obj' => $obj), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'getFilters', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'isFiltersStateClean', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'hasFilters', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return $this->valueHolder4c0da->hasFilters();
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

        $instance->initializer5c886 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4c0da) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4c0da = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4c0da->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__get', ['name' => $name], $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        if (isset(self::$publicProperties40711[$name])) {
            return $this->valueHolder4c0da->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c0da;

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

        $targetObject = $this->valueHolder4c0da;
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
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c0da;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4c0da;
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
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__isset', array('name' => $name), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c0da;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4c0da;
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
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__unset', array('name' => $name), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4c0da;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4c0da;
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
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__clone', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        $this->valueHolder4c0da = clone $this->valueHolder4c0da;
    }

    public function __sleep()
    {
        $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, '__sleep', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;

        return array('valueHolder4c0da');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5c886 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5c886;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5c886 && ($this->initializer5c886->__invoke($valueHolder4c0da, $this, 'initializeProxy', array(), $this->initializer5c886) || 1) && $this->valueHolder4c0da = $valueHolder4c0da;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4c0da;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4c0da;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
