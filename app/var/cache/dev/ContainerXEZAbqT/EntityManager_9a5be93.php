<?php

namespace ContainerXEZAbqT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderba878 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerec0ee = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties048d4 = [
        
    ];

    public function getConnection()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getConnection', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getMetadataFactory', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getExpressionBuilder', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'beginTransaction', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getCache', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getCache();
    }

    public function transactional($func)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'transactional', array('func' => $func), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->transactional($func);
    }

    public function commit()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'commit', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->commit();
    }

    public function rollback()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'rollback', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getClassMetadata', array('className' => $className), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'createQuery', array('dql' => $dql), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'createNamedQuery', array('name' => $name), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'createQueryBuilder', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'flush', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'clear', array('entityName' => $entityName), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->clear($entityName);
    }

    public function close()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'close', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->close();
    }

    public function persist($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'persist', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'remove', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'refresh', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'detach', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'merge', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getRepository', array('entityName' => $entityName), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'contains', array('entity' => $entity), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getEventManager', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getConfiguration', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'isOpen', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getUnitOfWork', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getProxyFactory', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'initializeObject', array('obj' => $obj), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'getFilters', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'isFiltersStateClean', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'hasFilters', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return $this->valueHolderba878->hasFilters();
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

        $instance->initializerec0ee = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderba878) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderba878 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderba878->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__get', ['name' => $name], $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        if (isset(self::$publicProperties048d4[$name])) {
            return $this->valueHolderba878->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba878;

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

        $targetObject = $this->valueHolderba878;
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
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba878;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderba878;
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
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__isset', array('name' => $name), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba878;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderba878;
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
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__unset', array('name' => $name), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba878;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderba878;
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
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__clone', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        $this->valueHolderba878 = clone $this->valueHolderba878;
    }

    public function __sleep()
    {
        $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, '__sleep', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;

        return array('valueHolderba878');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerec0ee = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerec0ee;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerec0ee && ($this->initializerec0ee->__invoke($valueHolderba878, $this, 'initializeProxy', array(), $this->initializerec0ee) || 1) && $this->valueHolderba878 = $valueHolderba878;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderba878;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderba878;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
