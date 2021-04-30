<?php

namespace ContainerCasCJRx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera8637 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6fd5f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7ad93 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getConnection', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getMetadataFactory', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getExpressionBuilder', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'beginTransaction', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getCache', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'transactional', array('func' => $func), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->transactional($func);
    }

    public function commit()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'commit', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->commit();
    }

    public function rollback()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'rollback', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getClassMetadata', array('className' => $className), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'createQuery', array('dql' => $dql), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'createNamedQuery', array('name' => $name), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'createQueryBuilder', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'flush', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'clear', array('entityName' => $entityName), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->clear($entityName);
    }

    public function close()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'close', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->close();
    }

    public function persist($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'persist', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'remove', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'refresh', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'detach', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'merge', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'contains', array('entity' => $entity), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getEventManager', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getConfiguration', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'isOpen', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getUnitOfWork', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getProxyFactory', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'initializeObject', array('obj' => $obj), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'getFilters', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'isFiltersStateClean', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'hasFilters', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return $this->valueHoldera8637->hasFilters();
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

        $instance->initializer6fd5f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera8637) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera8637 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera8637->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__get', ['name' => $name], $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        if (isset(self::$publicProperties7ad93[$name])) {
            return $this->valueHoldera8637->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8637;

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

        $targetObject = $this->valueHoldera8637;
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
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8637;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera8637;
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
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__isset', array('name' => $name), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8637;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera8637;
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
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__unset', array('name' => $name), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera8637;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera8637;
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
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__clone', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        $this->valueHoldera8637 = clone $this->valueHoldera8637;
    }

    public function __sleep()
    {
        $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, '__sleep', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;

        return array('valueHoldera8637');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6fd5f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6fd5f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6fd5f && ($this->initializer6fd5f->__invoke($valueHoldera8637, $this, 'initializeProxy', array(), $this->initializer6fd5f) || 1) && $this->valueHoldera8637 = $valueHoldera8637;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera8637;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera8637;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
