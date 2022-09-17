<?php

namespace ContainerHeOiJ4a;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3258d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04f69 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6ebaa = [
        
    ];

    public function getConnection()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getConnection', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getMetadataFactory', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getExpressionBuilder', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'beginTransaction', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getCache', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'transactional', array('func' => $func), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'commit', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->commit();
    }

    public function rollback()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'rollback', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getClassMetadata', array('className' => $className), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'createQuery', array('dql' => $dql), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'createNamedQuery', array('name' => $name), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'createQueryBuilder', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'flush', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'clear', array('entityName' => $entityName), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->clear($entityName);
    }

    public function close()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'close', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->close();
    }

    public function persist($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'persist', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'remove', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'refresh', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'detach', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'merge', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'contains', array('entity' => $entity), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getEventManager', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getConfiguration', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'isOpen', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getUnitOfWork', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getProxyFactory', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'initializeObject', array('obj' => $obj), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'getFilters', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'isFiltersStateClean', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'hasFilters', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return $this->valueHolder3258d->hasFilters();
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

        $instance->initializer04f69 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder3258d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3258d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3258d->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__get', ['name' => $name], $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        if (isset(self::$publicProperties6ebaa[$name])) {
            return $this->valueHolder3258d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3258d;

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

        $targetObject = $this->valueHolder3258d;
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
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3258d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3258d;
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
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__isset', array('name' => $name), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3258d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3258d;
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
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__unset', array('name' => $name), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3258d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3258d;
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
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__clone', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        $this->valueHolder3258d = clone $this->valueHolder3258d;
    }

    public function __sleep()
    {
        $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, '__sleep', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;

        return array('valueHolder3258d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04f69 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04f69;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04f69 && ($this->initializer04f69->__invoke($valueHolder3258d, $this, 'initializeProxy', array(), $this->initializer04f69) || 1) && $this->valueHolder3258d = $valueHolder3258d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3258d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3258d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
