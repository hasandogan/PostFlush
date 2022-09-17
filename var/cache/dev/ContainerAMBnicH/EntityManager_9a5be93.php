<?php

namespace ContainerAMBnicH;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2467 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer76746 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese6945 = [
        
    ];

    public function getConnection()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getConnection', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getMetadataFactory', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getExpressionBuilder', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'beginTransaction', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getCache', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getCache();
    }

    public function transactional($func)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'transactional', array('func' => $func), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'wrapInTransaction', array('func' => $func), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'commit', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->commit();
    }

    public function rollback()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'rollback', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getClassMetadata', array('className' => $className), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'createQuery', array('dql' => $dql), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'createNamedQuery', array('name' => $name), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'createQueryBuilder', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'flush', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'clear', array('entityName' => $entityName), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->clear($entityName);
    }

    public function close()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'close', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->close();
    }

    public function persist($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'persist', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'remove', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'refresh', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'detach', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'merge', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getRepository', array('entityName' => $entityName), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'contains', array('entity' => $entity), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getEventManager', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getConfiguration', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'isOpen', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getUnitOfWork', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getProxyFactory', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'initializeObject', array('obj' => $obj), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'getFilters', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'isFiltersStateClean', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'hasFilters', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return $this->valueHolderf2467->hasFilters();
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

        $instance->initializer76746 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderf2467) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2467 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2467->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__get', ['name' => $name], $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        if (isset(self::$publicPropertiese6945[$name])) {
            return $this->valueHolderf2467->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2467;

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

        $targetObject = $this->valueHolderf2467;
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
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2467;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2467;
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
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__isset', array('name' => $name), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2467;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2467;
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
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__unset', array('name' => $name), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2467;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2467;
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
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__clone', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        $this->valueHolderf2467 = clone $this->valueHolderf2467;
    }

    public function __sleep()
    {
        $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, '__sleep', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;

        return array('valueHolderf2467');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer76746 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer76746;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer76746 && ($this->initializer76746->__invoke($valueHolderf2467, $this, 'initializeProxy', array(), $this->initializer76746) || 1) && $this->valueHolderf2467 = $valueHolderf2467;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2467;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2467;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
