<?php

namespace ContainerTPeUtlN;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getConnection', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getMetadataFactory', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getExpressionBuilder', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'beginTransaction', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getCache', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'transactional', array('func' => $func), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'commit', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->commit();
    }

    public function rollback()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'rollback', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'createQuery', array('dql' => $dql), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'createQueryBuilder', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'flush', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'clear', array('entityName' => $entityName), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->clear($entityName);
    }

    public function close()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'close', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->close();
    }

    public function persist($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'persist', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'remove', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'refresh', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'detach', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'merge', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'contains', array('entity' => $entity), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getEventManager', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getConfiguration', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'isOpen', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getUnitOfWork', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getProxyFactory', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'getFilters', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'isFiltersStateClean', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, 'hasFilters', array(), $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        return $this->valueHolder9f0fd->hasFilters();
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

        $instance->initializerd8747 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9f0fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9f0fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9f0fd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd8747 && ($this->initializerd8747->__invoke($valueHolder9f0fd, $this, '__get', ['name' => $name], $this->initializerd8747) || 1) && $this->valueHolder9f0fd = $valueHolder9f0fd;

        if (isset(self::$publicPropertiesb9aa6[$name])) {
            return $this->valueHolder9f0fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
