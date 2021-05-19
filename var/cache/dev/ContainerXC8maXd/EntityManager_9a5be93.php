<?php

namespace ContainerXC8maXd;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getConnection', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getMetadataFactory', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getExpressionBuilder', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'beginTransaction', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getCache', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'transactional', array('func' => $func), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->transactional($func);
    }

    public function commit()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'commit', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->commit();
    }

    public function rollback()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'rollback', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getClassMetadata', array('className' => $className), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'createQuery', array('dql' => $dql), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'createNamedQuery', array('name' => $name), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'createQueryBuilder', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'flush', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'clear', array('entityName' => $entityName), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->clear($entityName);
    }

    public function close()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'close', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->close();
    }

    public function persist($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'persist', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'remove', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'refresh', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'detach', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'merge', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'contains', array('entity' => $entity), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getEventManager', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getConfiguration', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'isOpen', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getUnitOfWork', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getProxyFactory', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'initializeObject', array('obj' => $obj), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'getFilters', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'isFiltersStateClean', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, 'hasFilters', array(), $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        return $this->valueHolder25ead->hasFilters();
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

        $instance->initializer1646b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder25ead) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder25ead = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder25ead->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1646b && ($this->initializer1646b->__invoke($valueHolder25ead, $this, '__get', ['name' => $name], $this->initializer1646b) || 1) && $this->valueHolder25ead = $valueHolder25ead;

        if (isset(self::$publicPropertiesa0921[$name])) {
            return $this->valueHolder25ead->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
