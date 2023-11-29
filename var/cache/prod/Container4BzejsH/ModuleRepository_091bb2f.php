<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder12695 = null;
    private $initializere5fa7 = null;
    private static $publicProperties18220 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getList', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getInstalledModules', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getMustBeConfiguredModules', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getUpgradableModules', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getModule', array('moduleName' => $moduleName), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'setActionUrls', array('collection' => $collection), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return $this->valueHolder12695->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializere5fa7 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder12695) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder12695 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder12695->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__get', ['name' => $name], $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        if (isset(self::$publicProperties18220[$name])) {
            return $this->valueHolder12695->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
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
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__isset', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__unset', array('name' => $name), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12695;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder12695;
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
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__clone', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        $this->valueHolder12695 = clone $this->valueHolder12695;
    }
    public function __sleep()
    {
        $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, '__sleep', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
        return array('valueHolder12695');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere5fa7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere5fa7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializere5fa7 && ($this->initializere5fa7->__invoke($valueHolder12695, $this, 'initializeProxy', array(), $this->initializere5fa7) || 1) && $this->valueHolder12695 = $valueHolder12695;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12695;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12695;
    }
}
