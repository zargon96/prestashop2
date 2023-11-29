<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder2c4cd = null;
    private $initializerba06f = null;
    private static $publicPropertiesc0e60 = [
        
    ];
    public function getConnection()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getConnection', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getMetadataFactory', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getExpressionBuilder', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'beginTransaction', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getCache', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getCache();
    }
    public function transactional($func)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'transactional', array('func' => $func), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'wrapInTransaction', array('func' => $func), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'commit', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->commit();
    }
    public function rollback()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'rollback', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getClassMetadata', array('className' => $className), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'createQuery', array('dql' => $dql), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'createNamedQuery', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'createQueryBuilder', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'flush', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'clear', array('entityName' => $entityName), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->clear($entityName);
    }
    public function close()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'close', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->close();
    }
    public function persist($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'persist', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'remove', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'refresh', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'detach', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'merge', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getRepository', array('entityName' => $entityName), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'contains', array('entity' => $entity), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getEventManager', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getConfiguration', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'isOpen', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getUnitOfWork', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getProxyFactory', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'initializeObject', array('obj' => $obj), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'getFilters', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'isFiltersStateClean', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'hasFilters', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return $this->valueHolder2c4cd->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerba06f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder2c4cd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c4cd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder2c4cd->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__get', ['name' => $name], $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        if (isset(self::$publicPropertiesc0e60[$name])) {
            return $this->valueHolder2c4cd->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
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
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__isset', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__unset', array('name' => $name), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c4cd;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder2c4cd;
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
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__clone', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        $this->valueHolder2c4cd = clone $this->valueHolder2c4cd;
    }
    public function __sleep()
    {
        $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, '__sleep', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
        return array('valueHolder2c4cd');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerba06f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerba06f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerba06f && ($this->initializerba06f->__invoke($valueHolder2c4cd, $this, 'initializeProxy', array(), $this->initializerba06f) || 1) && $this->valueHolder2c4cd = $valueHolder2c4cd;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c4cd;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c4cd;
    }
}
