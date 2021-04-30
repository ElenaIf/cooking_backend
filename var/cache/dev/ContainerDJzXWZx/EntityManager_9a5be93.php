<?php

namespace ContainerDJzXWZx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd74af = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7784a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76c4c = [
        
    ];

    public function getConnection()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getConnection', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getMetadataFactory', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getExpressionBuilder', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'beginTransaction', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getCache', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'transactional', array('func' => $func), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->transactional($func);
    }

    public function commit()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'commit', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->commit();
    }

    public function rollback()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'rollback', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getClassMetadata', array('className' => $className), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'createQuery', array('dql' => $dql), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'createNamedQuery', array('name' => $name), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'createQueryBuilder', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'flush', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'clear', array('entityName' => $entityName), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->clear($entityName);
    }

    public function close()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'close', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->close();
    }

    public function persist($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'persist', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'remove', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'refresh', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'detach', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'merge', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'contains', array('entity' => $entity), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getEventManager', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getConfiguration', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'isOpen', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getUnitOfWork', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getProxyFactory', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'initializeObject', array('obj' => $obj), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'getFilters', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'isFiltersStateClean', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'hasFilters', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return $this->valueHolderd74af->hasFilters();
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

        $instance->initializer7784a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd74af) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd74af = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd74af->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__get', ['name' => $name], $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        if (isset(self::$publicProperties76c4c[$name])) {
            return $this->valueHolderd74af->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd74af;

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

        $targetObject = $this->valueHolderd74af;
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
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd74af;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd74af;
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
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__isset', array('name' => $name), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd74af;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd74af;
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
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__unset', array('name' => $name), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd74af;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd74af;
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
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__clone', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        $this->valueHolderd74af = clone $this->valueHolderd74af;
    }

    public function __sleep()
    {
        $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, '__sleep', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;

        return array('valueHolderd74af');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7784a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7784a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7784a && ($this->initializer7784a->__invoke($valueHolderd74af, $this, 'initializeProxy', array(), $this->initializer7784a) || 1) && $this->valueHolderd74af = $valueHolderd74af;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd74af;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd74af;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
