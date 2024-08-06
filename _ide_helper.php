<?php
/* @noinspection ALL */
// @formatter:off
// phpcs:ignoreFile

/**
 * A helper file for Laravel, to provide autocomplete information to your IDE
 * Generated for Laravel 11.4.0.
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace Illuminate\Support\Facades {
            /**
     * 
     *
     * @see \Illuminate\Auth\AuthManager
     * @see \Illuminate\Auth\SessionGuard
     */        class Auth {
                    /**
         * Attempt to get the guard from the local cache.
         *
         * @param string|null $name
         * @return \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard 
         * @static 
         */        public static function guard($name = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->guard($name);
        }
                    /**
         * Create a session based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */        public static function createSessionDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createSessionDriver($name, $config);
        }
                    /**
         * Create a token based authentication guard.
         *
         * @param string $name
         * @param array $config
         * @return \Illuminate\Auth\TokenGuard 
         * @static 
         */        public static function createTokenDriver($name, $config)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createTokenDriver($name, $config);
        }
                    /**
         * Get the default authentication driver name.
         *
         * @return string 
         * @static 
         */        public static function getDefaultDriver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Set the default guard driver the factory should serve.
         *
         * @param string $name
         * @return void 
         * @static 
         */        public static function shouldUse($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        $instance->shouldUse($name);
        }
                    /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void 
         * @static 
         */        public static function setDefaultDriver($name)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        $instance->setDefaultDriver($name);
        }
                    /**
         * Register a new callback based request guard.
         *
         * @param string $driver
         * @param callable $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function viaRequest($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->viaRequest($driver, $callback);
        }
                    /**
         * Get the user resolver callback.
         *
         * @return \Closure 
         * @static 
         */        public static function userResolver()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->userResolver();
        }
                    /**
         * Set the callback to be used to resolve users.
         *
         * @param \Closure $userResolver
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function resolveUsersUsing($userResolver)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->resolveUsersUsing($userResolver);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Register a custom provider creator Closure.
         *
         * @param string $name
         * @param \Closure $callback
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function provider($name, $callback)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->provider($name, $callback);
        }
                    /**
         * Determines if any guards have already been resolved.
         *
         * @return bool 
         * @static 
         */        public static function hasResolvedGuards()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->hasResolvedGuards();
        }
                    /**
         * Forget all of the resolved guard instances.
         *
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function forgetGuards()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->forgetGuards();
        }
                    /**
         * Set the application instance used by the manager.
         *
         * @param \Illuminate\Contracts\Foundation\Application $app
         * @return \Illuminate\Auth\AuthManager 
         * @static 
         */        public static function setApplication($app)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->setApplication($app);
        }
                    /**
         * Create the user provider implementation for the driver.
         *
         * @param string|null $provider
         * @return \Illuminate\Contracts\Auth\UserProvider|null 
         * @throws \InvalidArgumentException
         * @static 
         */        public static function createUserProvider($provider = null)
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->createUserProvider($provider);
        }
                    /**
         * Get the default user provider name.
         *
         * @return string 
         * @static 
         */        public static function getDefaultUserProvider()
        {
                        /** @var \Illuminate\Auth\AuthManager $instance */
                        return $instance->getDefaultUserProvider();
        }
                    /**
         * Get the currently authenticated user.
         *
         * @return \App\Models\User|null 
         * @static 
         */        public static function user()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->user();
        }
                    /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|string|null 
         * @static 
         */        public static function id()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->id();
        }
                    /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */        public static function once($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->once($credentials);
        }
                    /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return \App\Models\User|false 
         * @static 
         */        public static function onceUsingId($id)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceUsingId($id);
        }
                    /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool 
         * @static 
         */        public static function validate($credentials = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->validate($credentials);
        }
                    /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static 
         */        public static function basic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->basic($field, $extraConditions);
        }
                    /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @param array $extraConditions
         * @return \Symfony\Component\HttpFoundation\Response|null 
         * @throws \Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException
         * @static 
         */        public static function onceBasic($field = 'email', $extraConditions = [])
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->onceBasic($field, $extraConditions);
        }
                    /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @return bool 
         * @static 
         */        public static function attempt($credentials = [], $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attempt($credentials, $remember);
        }
                    /**
         * Attempt to authenticate a user with credentials and additional callbacks.
         *
         * @param array $credentials
         * @param array|callable|null $callbacks
         * @param bool $remember
         * @return bool 
         * @static 
         */        public static function attemptWhen($credentials = [], $callbacks = null, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->attemptWhen($credentials, $callbacks, $remember);
        }
                    /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\Models\User|false 
         * @static 
         */        public static function loginUsingId($id, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->loginUsingId($id, $remember);
        }
                    /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void 
         * @static 
         */        public static function login($user, $remember = false)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->login($user, $remember);
        }
                    /**
         * Log the user out of the application.
         *
         * @return void 
         * @static 
         */        public static function logout()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->logout();
        }
                    /**
         * Log the user out of the application on their current device only.
         * 
         * This method does not cycle the "remember" token.
         *
         * @return void 
         * @static 
         */        public static function logoutCurrentDevice()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->logoutCurrentDevice();
        }
                    /**
         * Invalidate other sessions for the current user.
         * 
         * The application must be using the AuthenticateSession middleware.
         *
         * @param string $password
         * @return \App\Models\User|null 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */        public static function logoutOtherDevices($password)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->logoutOtherDevices($password);
        }
                    /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void 
         * @static 
         */        public static function attempting($callback)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->attempting($callback);
        }
                    /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\Models\User 
         * @static 
         */        public static function getLastAttempted()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getLastAttempted();
        }
                    /**
         * Get a unique identifier for the auth session value.
         *
         * @return string 
         * @static 
         */        public static function getName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getName();
        }
                    /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string 
         * @static 
         */        public static function getRecallerName()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRecallerName();
        }
                    /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool 
         * @static 
         */        public static function viaRemember()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->viaRemember();
        }
                    /**
         * Set the number of minutes the remember me cookie should be valid for.
         *
         * @param int $minutes
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */        public static function setRememberDuration($minutes)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setRememberDuration($minutes);
        }
                    /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory 
         * @throws \RuntimeException
         * @static 
         */        public static function getCookieJar()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getCookieJar();
        }
                    /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void 
         * @static 
         */        public static function setCookieJar($cookie)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setCookieJar($cookie);
        }
                    /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher 
         * @static 
         */        public static function getDispatcher()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getDispatcher();
        }
                    /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void 
         * @static 
         */        public static function setDispatcher($events)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setDispatcher($events);
        }
                    /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Contracts\Session\Session 
         * @static 
         */        public static function getSession()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getSession();
        }
                    /**
         * Return the currently cached user.
         *
         * @return \App\Models\User|null 
         * @static 
         */        public static function getUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getUser();
        }
                    /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */        public static function setUser($user)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setUser($user);
        }
                    /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request 
         * @static 
         */        public static function getRequest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getRequest();
        }
                    /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */        public static function setRequest($request)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->setRequest($request);
        }
                    /**
         * Get the timebox instance used by the guard.
         *
         * @return \Illuminate\Support\Timebox 
         * @static 
         */        public static function getTimebox()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getTimebox();
        }
                    /**
         * Determine if the current user is authenticated. If not, throw an exception.
         *
         * @return \App\Models\User 
         * @throws \Illuminate\Auth\AuthenticationException
         * @static 
         */        public static function authenticate()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->authenticate();
        }
                    /**
         * Determine if the guard has a user instance.
         *
         * @return bool 
         * @static 
         */        public static function hasUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->hasUser();
        }
                    /**
         * Determine if the current user is authenticated.
         *
         * @return bool 
         * @static 
         */        public static function check()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->check();
        }
                    /**
         * Determine if the current user is a guest.
         *
         * @return bool 
         * @static 
         */        public static function guest()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->guest();
        }
                    /**
         * Forget the current user.
         *
         * @return \Illuminate\Auth\SessionGuard 
         * @static 
         */        public static function forgetUser()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->forgetUser();
        }
                    /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider 
         * @static 
         */        public static function getProvider()
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        return $instance->getProvider();
        }
                    /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void 
         * @static 
         */        public static function setProvider($provider)
        {
                        /** @var \Illuminate\Auth\SessionGuard $instance */
                        $instance->setProvider($provider);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */        public static function macro($name, $macro)
        {
                        \Illuminate\Auth\SessionGuard::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Auth\SessionGuard::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */        public static function hasMacro($name)
        {
                        return \Illuminate\Auth\SessionGuard::hasMacro($name);
        }
                    /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */        public static function flushMacros()
        {
                        \Illuminate\Auth\SessionGuard::flushMacros();
        }
            }
            /**
     * 
     *
     * @method static \Illuminate\Routing\RouteRegistrar attribute(string $key, mixed $value)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlpha(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereAlphaNumeric(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereNumber(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUlid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereUuid(array|string $parameters)
     * @method static \Illuminate\Routing\RouteRegistrar whereIn(array|string $parameters, array $values)
     * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar controller(string $controller)
     * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar missing(\Closure $missing)
     * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
     * @method static \Illuminate\Routing\RouteRegistrar namespace(string|null $value)
     * @method static \Illuminate\Routing\RouteRegistrar prefix(string $prefix)
     * @method static \Illuminate\Routing\RouteRegistrar scopeBindings()
     * @method static \Illuminate\Routing\RouteRegistrar where(array $where)
     * @method static \Illuminate\Routing\RouteRegistrar withoutMiddleware(array|string $middleware)
     * @method static \Illuminate\Routing\RouteRegistrar withoutScopedBindings()
     * @see \Illuminate\Routing\Router
     */        class Route {
                    /**
         * Register a new GET route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function get($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->get($uri, $action);
        }
                    /**
         * Register a new POST route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function post($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->post($uri, $action);
        }
                    /**
         * Register a new PUT route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function put($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->put($uri, $action);
        }
                    /**
         * Register a new PATCH route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function patch($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->patch($uri, $action);
        }
                    /**
         * Register a new DELETE route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function delete($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->delete($uri, $action);
        }
                    /**
         * Register a new OPTIONS route with the router.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function options($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->options($uri, $action);
        }
                    /**
         * Register a new route responding to all verbs.
         *
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function any($uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->any($uri, $action);
        }
                    /**
         * Register a new fallback route with the router.
         *
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function fallback($action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->fallback($action);
        }
                    /**
         * Create a redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @param int $status
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function redirect($uri, $destination, $status = 302)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->redirect($uri, $destination, $status);
        }
                    /**
         * Create a permanent redirect from one URI to another.
         *
         * @param string $uri
         * @param string $destination
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function permanentRedirect($uri, $destination)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->permanentRedirect($uri, $destination);
        }
                    /**
         * Register a new route that returns a view.
         *
         * @param string $uri
         * @param string $view
         * @param array $data
         * @param int|array $status
         * @param array $headers
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function view($uri, $view, $data = [], $status = 200, $headers = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->view($uri, $view, $data, $status, $headers);
        }
                    /**
         * Register a new route with the given verbs.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function match($methods, $uri, $action = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->match($methods, $uri, $action);
        }
                    /**
         * Register an array of resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void 
         * @static 
         */        public static function resources($resources, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->resources($resources, $options);
        }
                    /**
         * Route a resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */        public static function resource($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resource($name, $controller, $options);
        }
                    /**
         * Register an array of API resource controllers.
         *
         * @param array $resources
         * @param array $options
         * @return void 
         * @static 
         */        public static function apiResources($resources, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->apiResources($resources, $options);
        }
                    /**
         * Route an API resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingResourceRegistration 
         * @static 
         */        public static function apiResource($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiResource($name, $controller, $options);
        }
                    /**
         * Register an array of singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void 
         * @static 
         */        public static function singletons($singletons, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->singletons($singletons, $options);
        }
                    /**
         * Route a singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration 
         * @static 
         */        public static function singleton($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->singleton($name, $controller, $options);
        }
                    /**
         * Register an array of API singleton resource controllers.
         *
         * @param array $singletons
         * @param array $options
         * @return void 
         * @static 
         */        public static function apiSingletons($singletons, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->apiSingletons($singletons, $options);
        }
                    /**
         * Route an API singleton resource to a controller.
         *
         * @param string $name
         * @param string $controller
         * @param array $options
         * @return \Illuminate\Routing\PendingSingletonResourceRegistration 
         * @static 
         */        public static function apiSingleton($name, $controller, $options = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->apiSingleton($name, $controller, $options);
        }
                    /**
         * Create a route group with shared attributes.
         *
         * @param array $attributes
         * @param \Closure|array|string $routes
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function group($attributes, $routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->group($attributes, $routes);
        }
                    /**
         * Merge the given array with the last group stack.
         *
         * @param array $new
         * @param bool $prependExistingPrefix
         * @return array 
         * @static 
         */        public static function mergeWithLastGroup($new, $prependExistingPrefix = true)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->mergeWithLastGroup($new, $prependExistingPrefix);
        }
                    /**
         * Get the prefix from the last group on the stack.
         *
         * @return string 
         * @static 
         */        public static function getLastGroupPrefix()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getLastGroupPrefix();
        }
                    /**
         * Add a route to the underlying route collection.
         *
         * @param array|string $methods
         * @param string $uri
         * @param array|string|callable|null $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function addRoute($methods, $uri, $action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->addRoute($methods, $uri, $action);
        }
                    /**
         * Create a new Route object.
         *
         * @param array|string $methods
         * @param string $uri
         * @param mixed $action
         * @return \Illuminate\Routing\Route 
         * @static 
         */        public static function newRoute($methods, $uri, $action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->newRoute($methods, $uri, $action);
        }
                    /**
         * Return the response returned by the given route.
         *
         * @param string $name
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function respondWithRoute($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->respondWithRoute($name);
        }
                    /**
         * Dispatch the request to the application.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function dispatch($request)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->dispatch($request);
        }
                    /**
         * Dispatch the request to a route and return the response.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function dispatchToRoute($request)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->dispatchToRoute($request);
        }
                    /**
         * Gather the middleware for the given route with resolved class names.
         *
         * @param \Illuminate\Routing\Route $route
         * @return array 
         * @static 
         */        public static function gatherRouteMiddleware($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->gatherRouteMiddleware($route);
        }
                    /**
         * Resolve a flat array of middleware classes from the provided array.
         *
         * @param array $middleware
         * @param array $excluded
         * @return array 
         * @static 
         */        public static function resolveMiddleware($middleware, $excluded = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resolveMiddleware($middleware, $excluded);
        }
                    /**
         * Create a response instance from the given value.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function prepareResponse($request, $response)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->prepareResponse($request, $response);
        }
                    /**
         * Static version of prepareResponse.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param mixed $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function toResponse($request, $response)
        {
                        return \Illuminate\Routing\Router::toResponse($request, $response);
        }
                    /**
         * Substitute the route bindings onto the route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return \Illuminate\Routing\Route 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static 
         */        public static function substituteBindings($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->substituteBindings($route);
        }
                    /**
         * Substitute the implicit route bindings for the given route.
         *
         * @param \Illuminate\Routing\Route $route
         * @return void 
         * @throws \Illuminate\Database\Eloquent\ModelNotFoundException<\Illuminate\Database\Eloquent\Model>
         * @throws \Illuminate\Routing\Exceptions\BackedEnumCaseNotFoundException
         * @static 
         */        public static function substituteImplicitBindings($route)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->substituteImplicitBindings($route);
        }
                    /**
         * Register a callback to run after implicit bindings are substituted.
         *
         * @param callable $callback
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function substituteImplicitBindingsUsing($callback)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->substituteImplicitBindingsUsing($callback);
        }
                    /**
         * Register a route matched event listener.
         *
         * @param string|callable $callback
         * @return void 
         * @static 
         */        public static function matched($callback)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->matched($callback);
        }
                    /**
         * Get all of the defined middleware short-hand names.
         *
         * @return array 
         * @static 
         */        public static function getMiddleware()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * Register a short-hand name for a middleware.
         *
         * @param string $name
         * @param string $class
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function aliasMiddleware($name, $class)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->aliasMiddleware($name, $class);
        }
                    /**
         * Check if a middlewareGroup with the given name exists.
         *
         * @param string $name
         * @return bool 
         * @static 
         */        public static function hasMiddlewareGroup($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->hasMiddlewareGroup($name);
        }
                    /**
         * Get all of the defined middleware groups.
         *
         * @return array 
         * @static 
         */        public static function getMiddlewareGroups()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getMiddlewareGroups();
        }
                    /**
         * Register a group of middleware.
         *
         * @param string $name
         * @param array $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function middlewareGroup($name, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->middlewareGroup($name, $middleware);
        }
                    /**
         * Add a middleware to the beginning of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function prependMiddlewareToGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->prependMiddlewareToGroup($group, $middleware);
        }
                    /**
         * Add a middleware to the end of a middleware group.
         * 
         * If the middleware is already in the group, it will not be added again.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function pushMiddlewareToGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->pushMiddlewareToGroup($group, $middleware);
        }
                    /**
         * Remove the given middleware from the specified group.
         *
         * @param string $group
         * @param string $middleware
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function removeMiddlewareFromGroup($group, $middleware)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->removeMiddlewareFromGroup($group, $middleware);
        }
                    /**
         * Flush the router's middleware groups.
         *
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function flushMiddlewareGroups()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->flushMiddlewareGroups();
        }
                    /**
         * Add a new route parameter binder.
         *
         * @param string $key
         * @param string|callable $binder
         * @return void 
         * @static 
         */        public static function bind($key, $binder)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->bind($key, $binder);
        }
                    /**
         * Register a model binder for a wildcard.
         *
         * @param string $key
         * @param string $class
         * @param \Closure|null $callback
         * @return void 
         * @static 
         */        public static function model($key, $class, $callback = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->model($key, $class, $callback);
        }
                    /**
         * Get the binding callback for a given binding.
         *
         * @param string $key
         * @return \Closure|null 
         * @static 
         */        public static function getBindingCallback($key)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getBindingCallback($key);
        }
                    /**
         * Get the global "where" patterns.
         *
         * @return array 
         * @static 
         */        public static function getPatterns()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getPatterns();
        }
                    /**
         * Set a global where pattern on all routes.
         *
         * @param string $key
         * @param string $pattern
         * @return void 
         * @static 
         */        public static function pattern($key, $pattern)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->pattern($key, $pattern);
        }
                    /**
         * Set a group of global where patterns on all routes.
         *
         * @param array $patterns
         * @return void 
         * @static 
         */        public static function patterns($patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->patterns($patterns);
        }
                    /**
         * Determine if the router currently has a group stack.
         *
         * @return bool 
         * @static 
         */        public static function hasGroupStack()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->hasGroupStack();
        }
                    /**
         * Get the current group stack for the router.
         *
         * @return array 
         * @static 
         */        public static function getGroupStack()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getGroupStack();
        }
                    /**
         * Get a route parameter for the current route.
         *
         * @param string $key
         * @param string|null $default
         * @return mixed 
         * @static 
         */        public static function input($key, $default = null)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->input($key, $default);
        }
                    /**
         * Get the request currently being dispatched.
         *
         * @return \Illuminate\Http\Request 
         * @static 
         */        public static function getCurrentRequest()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getCurrentRequest();
        }
                    /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null 
         * @static 
         */        public static function getCurrentRoute()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getCurrentRoute();
        }
                    /**
         * Get the currently dispatched route instance.
         *
         * @return \Illuminate\Routing\Route|null 
         * @static 
         */        public static function current()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->current();
        }
                    /**
         * Check if a route with the given name exists.
         *
         * @param string|array $name
         * @return bool 
         * @static 
         */        public static function has($name)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->has($name);
        }
                    /**
         * Get the current route name.
         *
         * @return string|null 
         * @static 
         */        public static function currentRouteName()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteName();
        }
                    /**
         * Alias for the "currentRouteNamed" method.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */        public static function is(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->is(...$patterns);
        }
                    /**
         * Determine if the current route matches a pattern.
         *
         * @param mixed $patterns
         * @return bool 
         * @static 
         */        public static function currentRouteNamed(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteNamed(...$patterns);
        }
                    /**
         * Get the current route action.
         *
         * @return string|null 
         * @static 
         */        public static function currentRouteAction()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteAction();
        }
                    /**
         * Alias for the "currentRouteUses" method.
         *
         * @param array $patterns
         * @return bool 
         * @static 
         */        public static function uses(...$patterns)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->uses(...$patterns);
        }
                    /**
         * Determine if the current route action matches a given action.
         *
         * @param string $action
         * @return bool 
         * @static 
         */        public static function currentRouteUses($action)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->currentRouteUses($action);
        }
                    /**
         * Set the unmapped global resource parameters to singular.
         *
         * @param bool $singular
         * @return void 
         * @static 
         */        public static function singularResourceParameters($singular = true)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->singularResourceParameters($singular);
        }
                    /**
         * Set the global resource parameter mapping.
         *
         * @param array $parameters
         * @return void 
         * @static 
         */        public static function resourceParameters($parameters = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->resourceParameters($parameters);
        }
                    /**
         * Get or set the verbs used in the resource URIs.
         *
         * @param array $verbs
         * @return array|null 
         * @static 
         */        public static function resourceVerbs($verbs = [])
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->resourceVerbs($verbs);
        }
                    /**
         * Get the underlying route collection.
         *
         * @return \Illuminate\Routing\RouteCollectionInterface 
         * @static 
         */        public static function getRoutes()
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->getRoutes();
        }
                    /**
         * Set the route collection instance.
         *
         * @param \Illuminate\Routing\RouteCollection $routes
         * @return void 
         * @static 
         */        public static function setRoutes($routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->setRoutes($routes);
        }
                    /**
         * Set the compiled route collection instance.
         *
         * @param array $routes
         * @return void 
         * @static 
         */        public static function setCompiledRoutes($routes)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        $instance->setCompiledRoutes($routes);
        }
                    /**
         * Remove any duplicate middleware from the given array.
         *
         * @param array $middleware
         * @return array 
         * @static 
         */        public static function uniqueMiddleware($middleware)
        {
                        return \Illuminate\Routing\Router::uniqueMiddleware($middleware);
        }
                    /**
         * Set the container instance used by the router.
         *
         * @param \Illuminate\Container\Container $container
         * @return \Illuminate\Routing\Router 
         * @static 
         */        public static function setContainer($container)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * Register a custom macro.
         *
         * @param string $name
         * @param object|callable $macro
         * @return void 
         * @static 
         */        public static function macro($name, $macro)
        {
                        \Illuminate\Routing\Router::macro($name, $macro);
        }
                    /**
         * Mix another object into the class.
         *
         * @param object $mixin
         * @param bool $replace
         * @return void 
         * @throws \ReflectionException
         * @static 
         */        public static function mixin($mixin, $replace = true)
        {
                        \Illuminate\Routing\Router::mixin($mixin, $replace);
        }
                    /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool 
         * @static 
         */        public static function hasMacro($name)
        {
                        return \Illuminate\Routing\Router::hasMacro($name);
        }
                    /**
         * Flush the existing macros.
         *
         * @return void 
         * @static 
         */        public static function flushMacros()
        {
                        \Illuminate\Routing\Router::flushMacros();
        }
                    /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed 
         * @throws \BadMethodCallException
         * @static 
         */        public static function macroCall($method, $parameters)
        {
                        /** @var \Illuminate\Routing\Router $instance */
                        return $instance->macroCall($method, $parameters);
        }
            }
            /**
     * 
     *
     */        class Redis {
                    /**
         * Get a Redis connection by name.
         *
         * @param string|null $name
         * @return \Illuminate\Redis\Connections\Connection 
         * @static 
         */        public static function connection($name = null)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->connection($name);
        }
                    /**
         * Resolve the given connection by name.
         *
         * @param string|null $name
         * @return \Illuminate\Redis\Connections\Connection 
         * @throws \InvalidArgumentException
         * @static 
         */        public static function resolve($name = null)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->resolve($name);
        }
                    /**
         * Return all of the created connections.
         *
         * @return array 
         * @static 
         */        public static function connections()
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->connections();
        }
                    /**
         * Enable the firing of Redis command events.
         *
         * @return void 
         * @static 
         */        public static function enableEvents()
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        $instance->enableEvents();
        }
                    /**
         * Disable the firing of Redis command events.
         *
         * @return void 
         * @static 
         */        public static function disableEvents()
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        $instance->disableEvents();
        }
                    /**
         * Set the default driver.
         *
         * @param string $driver
         * @return void 
         * @static 
         */        public static function setDriver($driver)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        $instance->setDriver($driver);
        }
                    /**
         * Disconnect the given connection and remove from local cache.
         *
         * @param string|null $name
         * @return void 
         * @static 
         */        public static function purge($name = null)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        $instance->purge($name);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Illuminate\Redis\RedisManager 
         * @static 
         */        public static function extend($driver, $callback)
        {
                        /** @var \Illuminate\Redis\RedisManager $instance */
                        return $instance->extend($driver, $callback);
        }
            }
    }

namespace Barryvdh\Debugbar\Facades {
            /**
     * 
     *
     * @method static void alert(mixed $message)
     * @method static void critical(mixed $message)
     * @method static void debug(mixed $message)
     * @method static void emergency(mixed $message)
     * @method static void error(mixed $message)
     * @method static void info(mixed $message)
     * @method static void log(mixed $message)
     * @method static void notice(mixed $message)
     * @method static void warning(mixed $message)
     * @see \Barryvdh\Debugbar\LaravelDebugbar
     */        class Debugbar {
                    /**
         * Enable the Debugbar and boot, if not already booted.
         *
         * @static 
         */        public static function enable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->enable();
        }
                    /**
         * Boot the debugbar (add collectors, renderer and listener)
         *
         * @static 
         */        public static function boot()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->boot();
        }
                    /**
         * 
         *
         * @static 
         */        public static function shouldCollect($name, $default = false)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->shouldCollect($name, $default);
        }
                    /**
         * Adds a data collector
         *
         * @param \DebugBar\DataCollector\DataCollectorInterface $collector
         * @throws DebugBarException
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function addCollector($collector)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addCollector($collector);
        }
                    /**
         * Handle silenced errors
         *
         * @param $level
         * @param $message
         * @param string $file
         * @param int $line
         * @param array $context
         * @throws \ErrorException
         * @static 
         */        public static function handleError($level, $message, $file = '', $line = 0, $context = [])
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->handleError($level, $message, $file, $line, $context);
        }
                    /**
         * Starts a measure
         *
         * @param string $name Internal name, used to stop the measure
         * @param string $label Public name
         * @param string|null $collector
         * @static 
         */        public static function startMeasure($name, $label = null, $collector = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->startMeasure($name, $label, $collector);
        }
                    /**
         * Stops a measure
         *
         * @param string $name
         * @static 
         */        public static function stopMeasure($name)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stopMeasure($name);
        }
                    /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Exception $e
         * @deprecated in favor of addThrowable
         * @static 
         */        public static function addException($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addException($e);
        }
                    /**
         * Adds an exception to be profiled in the debug bar
         *
         * @param \Throwable $e
         * @static 
         */        public static function addThrowable($e)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addThrowable($e);
        }
                    /**
         * Returns a JavascriptRenderer for this instance
         *
         * @param string $baseUrl
         * @param string $basePath
         * @return \Barryvdh\Debugbar\JavascriptRenderer 
         * @static 
         */        public static function getJavascriptRenderer($baseUrl = null, $basePath = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getJavascriptRenderer($baseUrl, $basePath);
        }
                    /**
         * Modify the response and inject the debugbar (or data in headers)
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @param \Symfony\Component\HttpFoundation\Response $response
         * @return \Symfony\Component\HttpFoundation\Response 
         * @static 
         */        public static function modifyResponse($request, $response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->modifyResponse($request, $response);
        }
                    /**
         * Check if the Debugbar is enabled
         *
         * @return boolean 
         * @static 
         */        public static function isEnabled()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isEnabled();
        }
                    /**
         * Collects the data from the collectors
         *
         * @return array 
         * @static 
         */        public static function collect()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collect();
        }
                    /**
         * Injects the web debug toolbar into the given Response.
         *
         * @param \Symfony\Component\HttpFoundation\Response $response A Response instance
         * Based on https://github.com/symfony/WebProfilerBundle/blob/master/EventListener/WebDebugToolbarListener.php
         * @static 
         */        public static function injectDebugbar($response)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->injectDebugbar($response);
        }
                    /**
         * Disable the Debugbar
         *
         * @static 
         */        public static function disable()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->disable();
        }
                    /**
         * Adds a measure
         *
         * @param string $label
         * @param float $start
         * @param float $end
         * @param array|null $params
         * @param string|null $collector
         * @static 
         */        public static function addMeasure($label, $start, $end, $params = [], $collector = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMeasure($label, $start, $end, $params, $collector);
        }
                    /**
         * Utility function to measure the execution of a Closure
         *
         * @param string $label
         * @param \Closure $closure
         * @param string|null $collector
         * @return mixed 
         * @static 
         */        public static function measure($label, $closure, $collector = null)
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->measure($label, $closure, $collector);
        }
                    /**
         * Collect data in a CLI request
         *
         * @return array 
         * @static 
         */        public static function collectConsole()
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->collectConsole();
        }
                    /**
         * Adds a message to the MessagesCollector
         * 
         * A message can be anything from an object to a string
         *
         * @param mixed $message
         * @param string $label
         * @static 
         */        public static function addMessage($message, $label = 'info')
        {
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->addMessage($message, $label);
        }
                    /**
         * Checks if a data collector has been added
         *
         * @param string $name
         * @return boolean 
         * @static 
         */        public static function hasCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasCollector($name);
        }
                    /**
         * Returns a data collector
         *
         * @param string $name
         * @return \DebugBar\DataCollector\DataCollectorInterface 
         * @throws DebugBarException
         * @static 
         */        public static function getCollector($name)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollector($name);
        }
                    /**
         * Returns an array of all data collectors
         *
         * @return \DebugBar\array[DataCollectorInterface] 
         * @static 
         */        public static function getCollectors()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCollectors();
        }
                    /**
         * Sets the request id generator
         *
         * @param \DebugBar\RequestIdGeneratorInterface $generator
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function setRequestIdGenerator($generator)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setRequestIdGenerator($generator);
        }
                    /**
         * 
         *
         * @return \DebugBar\RequestIdGeneratorInterface 
         * @static 
         */        public static function getRequestIdGenerator()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getRequestIdGenerator();
        }
                    /**
         * Returns the id of the current request
         *
         * @return string 
         * @static 
         */        public static function getCurrentRequestId()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getCurrentRequestId();
        }
                    /**
         * Sets the storage backend to use to store the collected data
         *
         * @param \DebugBar\StorageInterface $storage
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function setStorage($storage = null)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStorage($storage);
        }
                    /**
         * 
         *
         * @return \DebugBar\StorageInterface 
         * @static 
         */        public static function getStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStorage();
        }
                    /**
         * Checks if the data will be persisted
         *
         * @return boolean 
         * @static 
         */        public static function isDataPersisted()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isDataPersisted();
        }
                    /**
         * Sets the HTTP driver
         *
         * @param \DebugBar\HttpDriverInterface $driver
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function setHttpDriver($driver)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setHttpDriver($driver);
        }
                    /**
         * Returns the HTTP driver
         * 
         * If no http driver where defined, a PhpHttpDriver is automatically created
         *
         * @return \DebugBar\HttpDriverInterface 
         * @static 
         */        public static function getHttpDriver()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getHttpDriver();
        }
                    /**
         * Returns collected data
         * 
         * Will collect the data if none have been collected yet
         *
         * @return array 
         * @static 
         */        public static function getData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getData();
        }
                    /**
         * Returns an array of HTTP headers containing the data
         *
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return array 
         * @static 
         */        public static function getDataAsHeaders($headerName = 'phpdebugbar', $maxHeaderLength = 4096, $maxTotalHeaderLength = 250000)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getDataAsHeaders($headerName, $maxHeaderLength, $maxTotalHeaderLength);
        }
                    /**
         * Sends the data through the HTTP headers
         *
         * @param bool $useOpenHandler
         * @param string $headerName
         * @param integer $maxHeaderLength
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function sendDataInHeaders($useOpenHandler = null, $headerName = 'phpdebugbar', $maxHeaderLength = 4096)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->sendDataInHeaders($useOpenHandler, $headerName, $maxHeaderLength);
        }
                    /**
         * Stacks the data in the session for later rendering
         *
         * @static 
         */        public static function stackData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->stackData();
        }
                    /**
         * Checks if there is stacked data in the session
         *
         * @return boolean 
         * @static 
         */        public static function hasStackedData()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->hasStackedData();
        }
                    /**
         * Returns the data stacked in the session
         *
         * @param boolean $delete Whether to delete the data in the session
         * @return array 
         * @static 
         */        public static function getStackedData($delete = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackedData($delete);
        }
                    /**
         * Sets the key to use in the $_SESSION array
         *
         * @param string $ns
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function setStackDataSessionNamespace($ns)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackDataSessionNamespace($ns);
        }
                    /**
         * Returns the key used in the $_SESSION array
         *
         * @return string 
         * @static 
         */        public static function getStackDataSessionNamespace()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->getStackDataSessionNamespace();
        }
                    /**
         * Sets whether to only use the session to store stacked data even
         * if a storage is enabled
         *
         * @param boolean $enabled
         * @return \Barryvdh\Debugbar\LaravelDebugbar 
         * @static 
         */        public static function setStackAlwaysUseSessionStorage($enabled = true)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->setStackAlwaysUseSessionStorage($enabled);
        }
                    /**
         * Checks if the session is always used to store stacked data
         * even if a storage is enabled
         *
         * @return boolean 
         * @static 
         */        public static function isStackAlwaysUseSessionStorage()
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->isStackAlwaysUseSessionStorage();
        }
                    /**
         * 
         *
         * @static 
         */        public static function offsetSet($key, $value)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetSet($key, $value);
        }
                    /**
         * 
         *
         * @static 
         */        public static function offsetGet($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetGet($key);
        }
                    /**
         * 
         *
         * @static 
         */        public static function offsetExists($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetExists($key);
        }
                    /**
         * 
         *
         * @static 
         */        public static function offsetUnset($key)
        {            //Method inherited from \DebugBar\DebugBar         
                        /** @var \Barryvdh\Debugbar\LaravelDebugbar $instance */
                        return $instance->offsetUnset($key);
        }
            }
    }

namespace Laravel\Socialite\Facades {
            /**
     * 
     *
     * @see \Laravel\Socialite\SocialiteManager
     */        class Socialite {
                    /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed 
         * @static 
         */        public static function with($driver)
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->with($driver);
        }
                    /**
         * Build an OAuth 2 provider instance.
         *
         * @param string $provider
         * @param array $config
         * @return \Laravel\Socialite\Two\AbstractProvider 
         * @static 
         */        public static function buildProvider($provider, $config)
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->buildProvider($provider, $config);
        }
                    /**
         * Format the server configuration.
         *
         * @param array $config
         * @return array 
         * @static 
         */        public static function formatConfig($config)
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->formatConfig($config);
        }
                    /**
         * Forget all of the resolved driver instances.
         *
         * @return \Laravel\Socialite\SocialiteManager 
         * @static 
         */        public static function forgetDrivers()
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->forgetDrivers();
        }
                    /**
         * Set the container instance used by the manager.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return \Laravel\Socialite\SocialiteManager 
         * @static 
         */        public static function setContainer($container)
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * Get the default driver name.
         *
         * @return string 
         * @throws \InvalidArgumentException
         * @static 
         */        public static function getDefaultDriver()
        {
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->getDefaultDriver();
        }
                    /**
         * Get a driver instance.
         *
         * @param string|null $driver
         * @return mixed 
         * @throws \InvalidArgumentException
         * @static 
         */        public static function driver($driver = null)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->driver($driver);
        }
                    /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return \Laravel\Socialite\SocialiteManager 
         * @static 
         */        public static function extend($driver, $callback)
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->extend($driver, $callback);
        }
                    /**
         * Get all of the created "drivers".
         *
         * @return array 
         * @static 
         */        public static function getDrivers()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->getDrivers();
        }
                    /**
         * Get the container instance used by the manager.
         *
         * @return \Illuminate\Contracts\Container\Container 
         * @static 
         */        public static function getContainer()
        {            //Method inherited from \Illuminate\Support\Manager         
                        /** @var \Laravel\Socialite\SocialiteManager $instance */
                        return $instance->getContainer();
        }
            }
    }

namespace Livewire {
            /**
     * 
     *
     * @see \Livewire\LivewireManager
     */        class Livewire {
                    /**
         * 
         *
         * @static 
         */        public static function setProvider($provider)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setProvider($provider);
        }
                    /**
         * 
         *
         * @static 
         */        public static function provide($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->provide($callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function component($name, $class = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->component($name, $class);
        }
                    /**
         * 
         *
         * @static 
         */        public static function componentHook($hook)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHook($hook);
        }
                    /**
         * 
         *
         * @static 
         */        public static function propertySynthesizer($synth)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->propertySynthesizer($synth);
        }
                    /**
         * 
         *
         * @static 
         */        public static function directive($name, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->directive($name, $callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function precompiler($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->precompiler($callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function new($name, $id = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->new($name, $id);
        }
                    /**
         * 
         *
         * @static 
         */        public static function isDiscoverable($componentNameOrClass)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isDiscoverable($componentNameOrClass);
        }
                    /**
         * 
         *
         * @static 
         */        public static function resolveMissingComponent($resolver)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->resolveMissingComponent($resolver);
        }
                    /**
         * 
         *
         * @static 
         */        public static function mount($name, $params = [], $key = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->mount($name, $params, $key);
        }
                    /**
         * 
         *
         * @static 
         */        public static function snapshot($component)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->snapshot($component);
        }
                    /**
         * 
         *
         * @static 
         */        public static function fromSnapshot($snapshot)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->fromSnapshot($snapshot);
        }
                    /**
         * 
         *
         * @static 
         */        public static function listen($eventName, $callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->listen($eventName, $callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function current()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->current();
        }
                    /**
         * 
         *
         * @static 
         */        public static function update($snapshot, $diff, $calls)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->update($snapshot, $diff, $calls);
        }
                    /**
         * 
         *
         * @static 
         */        public static function updateProperty($component, $path, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->updateProperty($component, $path, $value);
        }
                    /**
         * 
         *
         * @static 
         */        public static function isLivewireRequest()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isLivewireRequest();
        }
                    /**
         * 
         *
         * @static 
         */        public static function componentHasBeenRendered()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->componentHasBeenRendered();
        }
                    /**
         * 
         *
         * @static 
         */        public static function forceAssetInjection()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->forceAssetInjection();
        }
                    /**
         * 
         *
         * @static 
         */        public static function setUpdateRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setUpdateRoute($callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function getUpdateUri()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getUpdateUri();
        }
                    /**
         * 
         *
         * @static 
         */        public static function setScriptRoute($callback)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setScriptRoute($callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function useScriptTagAttributes($attributes)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->useScriptTagAttributes($attributes);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withUrlParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withUrlParams($params);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withQueryParams($params)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withQueryParams($params);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withCookie($name, $value)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookie($name, $value);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withCookies($cookies)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withCookies($cookies);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withHeaders($headers)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withHeaders($headers);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withoutLazyLoading()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->withoutLazyLoading();
        }
                    /**
         * 
         *
         * @static 
         */        public static function test($name, $params = [])
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->test($name, $params);
        }
                    /**
         * 
         *
         * @static 
         */        public static function visit($name)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->visit($name);
        }
                    /**
         * 
         *
         * @static 
         */        public static function actingAs($user, $driver = null)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->actingAs($user, $driver);
        }
                    /**
         * 
         *
         * @static 
         */        public static function isRunningServerless()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->isRunningServerless();
        }
                    /**
         * 
         *
         * @static 
         */        public static function addPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->addPersistentMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */        public static function setPersistentMiddleware($middleware)
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->setPersistentMiddleware($middleware);
        }
                    /**
         * 
         *
         * @static 
         */        public static function getPersistentMiddleware()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->getPersistentMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */        public static function flushState()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->flushState();
        }
                    /**
         * 
         *
         * @static 
         */        public static function originalUrl()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalUrl();
        }
                    /**
         * 
         *
         * @static 
         */        public static function originalPath()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalPath();
        }
                    /**
         * 
         *
         * @static 
         */        public static function originalMethod()
        {
                        /** @var \Livewire\LivewireManager $instance */
                        return $instance->originalMethod();
        }
            }
    }

namespace Saloon\Laravel\Facades {
            /**
     * 
     *
     * @see \Saloon\Laravel\Saloon
     * @mixin \Saloon\Laravel\Traits\HasDeprecatedFacadeMethods
     */        class Saloon {
                    /**
         * Start mocking!
         *
         * @param array<\Saloon\Http\Faking\MockResponse|\Saloon\Http\Faking\Fixture|callable> $responses
         * @static 
         */        public static function fake($responses)
        {
                        return \Saloon\Laravel\Saloon::fake($responses);
        }
                    /**
         * Retrieve the global mock client
         *
         * @static 
         */        public static function mockClient()
        {
                        return \Saloon\Laravel\Saloon::mockClient();
        }
                    /**
         * Assert that a given request was sent.
         *
         * @static 
         */        public static function assertSent($value)
        {
                        return \Saloon\Laravel\Saloon::assertSent($value);
        }
                    /**
         * Assert that a given request was not sent.
         *
         * @static 
         */        public static function assertNotSent($value)
        {
                        return \Saloon\Laravel\Saloon::assertNotSent($value);
        }
                    /**
         * Assert JSON data was sent
         *
         * @param array<string, mixed> $data
         * @static 
         */        public static function assertSentJson($request, $data)
        {
                        return \Saloon\Laravel\Saloon::assertSentJson($request, $data);
        }
                    /**
         * Assert that nothing was sent.
         *
         * @static 
         */        public static function assertNothingSent()
        {
                        return \Saloon\Laravel\Saloon::assertNothingSent();
        }
                    /**
         * Assert a request count has been met.
         *
         * @static 
         */        public static function assertSentCount($count)
        {
                        return \Saloon\Laravel\Saloon::assertSentCount($count);
        }
                    /**
         * Start Saloon recording responses.
         *
         * @deprecated This method will be removed in Saloon v4.
         * @static 
         */        public static function record()
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->record();
        }
                    /**
         * Stop Saloon recording responses.
         *
         * @deprecated This method will be removed in Saloon v4.
         * @static 
         */        public static function stopRecording()
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->stopRecording();
        }
                    /**
         * Check if Saloon is recording
         *
         * @deprecated This method will be removed in Saloon v4.
         * @static 
         */        public static function isRecording()
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->isRecording();
        }
                    /**
         * Record a response.
         *
         * @deprecated This method will be removed in Saloon v4.
         * @static 
         */        public static function recordResponse($response)
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->recordResponse($response);
        }
                    /**
         * Get all the recorded responses.
         *
         * @deprecated This method will be removed in Saloon v4.
         * @return array<\Saloon\Http\Response> 
         * @static 
         */        public static function getRecordedResponses()
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->getRecordedResponses();
        }
                    /**
         * Get the last response that Saloon recorded.
         *
         * @deprecated This method will be removed in Saloon v4.
         * @static 
         */        public static function getLastRecordedResponse()
        {
                        /** @var \Saloon\Laravel\Saloon $instance */
                        return $instance->getLastRecordedResponse();
        }
            }
    }

namespace Spatie\LaravelIgnition\Facades {
            /**
     * 
     *
     * @see \Spatie\FlareClient\Flare
     */        class Flare {
                    /**
         * 
         *
         * @static 
         */        public static function make($apiKey = null, $contextDetector = null)
        {
                        return \Spatie\FlareClient\Flare::make($apiKey, $contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */        public static function setApiToken($apiToken)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setApiToken($apiToken);
        }
                    /**
         * 
         *
         * @static 
         */        public static function apiTokenSet()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->apiTokenSet();
        }
                    /**
         * 
         *
         * @static 
         */        public static function setBaseUrl($baseUrl)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setBaseUrl($baseUrl);
        }
                    /**
         * 
         *
         * @static 
         */        public static function setStage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setStage($stage);
        }
                    /**
         * 
         *
         * @static 
         */        public static function sendReportsImmediately()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendReportsImmediately();
        }
                    /**
         * 
         *
         * @static 
         */        public static function determineVersionUsing($determineVersionCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->determineVersionUsing($determineVersionCallable);
        }
                    /**
         * 
         *
         * @static 
         */        public static function reportErrorLevels($reportErrorLevels)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportErrorLevels($reportErrorLevels);
        }
                    /**
         * 
         *
         * @static 
         */        public static function filterExceptionsUsing($filterExceptionsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterExceptionsUsing($filterExceptionsCallable);
        }
                    /**
         * 
         *
         * @static 
         */        public static function filterReportsUsing($filterReportsCallable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->filterReportsUsing($filterReportsCallable);
        }
                    /**
         * 
         *
         * @param array<class-string<ArgumentReducer>|ArgumentReducer>|\Spatie\Backtrace\Arguments\ArgumentReducers|null $argumentReducers
         * @static 
         */        public static function argumentReducers($argumentReducers)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->argumentReducers($argumentReducers);
        }
                    /**
         * 
         *
         * @static 
         */        public static function withStackFrameArguments($withStackFrameArguments = true)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->withStackFrameArguments($withStackFrameArguments);
        }
                    /**
         * 
         *
         * @static 
         */        public static function version()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->version();
        }
                    /**
         * 
         *
         * @return array<int, FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */        public static function getMiddleware()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddleware();
        }
                    /**
         * 
         *
         * @static 
         */        public static function setContextProviderDetector($contextDetector)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContextProviderDetector($contextDetector);
        }
                    /**
         * 
         *
         * @static 
         */        public static function setContainer($container)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->setContainer($container);
        }
                    /**
         * 
         *
         * @static 
         */        public static function registerFlareHandlers()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerFlareHandlers();
        }
                    /**
         * 
         *
         * @static 
         */        public static function registerExceptionHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerExceptionHandler();
        }
                    /**
         * 
         *
         * @static 
         */        public static function registerErrorHandler()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerErrorHandler();
        }
                    /**
         * 
         *
         * @param \Spatie\FlareClient\FlareMiddleware\FlareMiddleware|array<FlareMiddleware>|\Spatie\FlareClient\class-string<FlareMiddleware>|callable $middleware
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */        public static function registerMiddleware($middleware)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->registerMiddleware($middleware);
        }
                    /**
         * 
         *
         * @return array<int,FlareMiddleware|class-string<FlareMiddleware>> 
         * @static 
         */        public static function getMiddlewares()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getMiddlewares();
        }
                    /**
         * 
         *
         * @param string $name
         * @param string $messageLevel
         * @param array<int, mixed> $metaData
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */        public static function glow($name, $messageLevel = 'info', $metaData = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->glow($name, $messageLevel, $metaData);
        }
                    /**
         * 
         *
         * @static 
         */        public static function handleException($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleException($throwable);
        }
                    /**
         * 
         *
         * @return mixed 
         * @static 
         */        public static function handleError($code, $message, $file = '', $line = 0)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->handleError($code, $message, $file, $line);
        }
                    /**
         * 
         *
         * @static 
         */        public static function applicationPath($applicationPath)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->applicationPath($applicationPath);
        }
                    /**
         * 
         *
         * @static 
         */        public static function report($throwable, $callback = null, $report = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->report($throwable, $callback, $report);
        }
                    /**
         * 
         *
         * @static 
         */        public static function reportMessage($message, $logLevel, $callback = null)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reportMessage($message, $logLevel, $callback);
        }
                    /**
         * 
         *
         * @static 
         */        public static function sendTestReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->sendTestReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */        public static function reset()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->reset();
        }
                    /**
         * 
         *
         * @static 
         */        public static function anonymizeIp()
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->anonymizeIp();
        }
                    /**
         * 
         *
         * @param array<int, string> $fieldNames
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */        public static function censorRequestBodyFields($fieldNames)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->censorRequestBodyFields($fieldNames);
        }
                    /**
         * 
         *
         * @static 
         */        public static function createReport($throwable)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReport($throwable);
        }
                    /**
         * 
         *
         * @static 
         */        public static function createReportFromMessage($message, $logLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->createReportFromMessage($message, $logLevel);
        }
                    /**
         * 
         *
         * @static 
         */        public static function stage($stage)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->stage($stage);
        }
                    /**
         * 
         *
         * @static 
         */        public static function messageLevel($messageLevel)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->messageLevel($messageLevel);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param mixed $default
         * @return array<int, mixed> 
         * @static 
         */        public static function getGroup($groupName = 'context', $default = [])
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->getGroup($groupName, $default);
        }
                    /**
         * 
         *
         * @static 
         */        public static function context($key, $value)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->context($key, $value);
        }
                    /**
         * 
         *
         * @param string $groupName
         * @param array<string, mixed> $properties
         * @return \Spatie\FlareClient\Flare 
         * @static 
         */        public static function group($groupName, $properties)
        {
                        /** @var \Spatie\FlareClient\Flare $instance */
                        return $instance->group($groupName, $properties);
        }
            }
    }

namespace Illuminate\Support {
            /**
     * 
     *
     * @template TKey of array-key
     * @template-covariant TValue
     * @implements \ArrayAccess<TKey, TValue>
     * @implements \Illuminate\Support\Enumerable<TKey, TValue>
     */        class Collection {
                    /**
         * 
         *
         * @see \Barryvdh\Debugbar\ServiceProvider::register()
         * @static 
         */        public static function debug()
        {
                        return \Illuminate\Support\Collection::debug();
        }
            }
    }

namespace Illuminate\Http {
            /**
     * 
     *
     */        class Request {
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param array $rules
         * @param mixed $params
         * @static 
         */        public static function validate($rules, ...$params)
        {
                        return \Illuminate\Http\Request::validate($rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestValidation()
         * @param string $errorBag
         * @param array $rules
         * @param mixed $params
         * @static 
         */        public static function validateWithBag($errorBag, $rules, ...$params)
        {
                        return \Illuminate\Http\Request::validateWithBag($errorBag, $rules, ...$params);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $absolute
         * @static 
         */        public static function hasValidSignature($absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignature($absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @static 
         */        public static function hasValidRelativeSignature()
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignature();
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @param mixed $absolute
         * @static 
         */        public static function hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
        {
                        return \Illuminate\Http\Request::hasValidSignatureWhileIgnoring($ignoreQuery, $absolute);
        }
                    /**
         * 
         *
         * @see \Illuminate\Foundation\Providers\FoundationServiceProvider::registerRequestSignatureValidation()
         * @param mixed $ignoreQuery
         * @static 
         */        public static function hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
        {
                        return \Illuminate\Http\Request::hasValidRelativeSignatureWhileIgnoring($ignoreQuery);
        }
            }
    }

namespace Illuminate\Routing {
            /**
     * 
     *
     */        class Route {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportLazyLoading\SupportLazyLoading::registerRouteMacro()
         * @param mixed $enabled
         * @static 
         */        public static function lazy($enabled = true)
        {
                        return \Illuminate\Routing\Route::lazy($enabled);
        }
            }
    }

namespace Illuminate\View {
            /**
     * 
     *
     */        class ComponentAttributeBag {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportBladeAttributes\SupportBladeAttributes::provide()
         * @param mixed $name
         * @static 
         */        public static function wire($name)
        {
                        return \Illuminate\View\ComponentAttributeBag::wire($name);
        }
            }
            /**
     * 
     *
     */        class View {
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $data
         * @static 
         */        public static function layoutData($data = [])
        {
                        return \Illuminate\View\View::layoutData($data);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $section
         * @static 
         */        public static function section($section)
        {
                        return \Illuminate\View\View::section($section);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $title
         * @static 
         */        public static function title($title)
        {
                        return \Illuminate\View\View::title($title);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $slot
         * @static 
         */        public static function slot($slot)
        {
                        return \Illuminate\View\View::slot($slot);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static 
         */        public static function extends($view, $params = [])
        {
                        return \Illuminate\View\View::extends($view, $params);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param mixed $view
         * @param mixed $params
         * @static 
         */        public static function layout($view, $params = [])
        {
                        return \Illuminate\View\View::layout($view, $params);
        }
                    /**
         * 
         *
         * @see \Livewire\Features\SupportPageComponents\SupportPageComponents::registerLayoutViewMacros()
         * @param callable $callback
         * @static 
         */        public static function response($callback)
        {
                        return \Illuminate\View\View::response($callback);
        }
            }
    }

namespace Illuminate\Database\Query {
            /**
     * 
     *
     */        class Builder {
                    /**
         * 
         *
         * @see \App\Providers\AppServiceProvider::boot()
         * @param string $field
         * @param string $search
         * @return \Illuminate\Database\Query\Builder 
         * @static 
         */        public static function search($field, $search)
        {
                        return \Illuminate\Database\Query\Builder::search($field, $search);
        }
            }
    }


namespace  {
            class Auth extends \Illuminate\Support\Facades\Auth {}
            class Route extends \Illuminate\Support\Facades\Route {}
            class Redis extends \Illuminate\Support\Facades\Redis {}
            class Debugbar extends \Barryvdh\Debugbar\Facades\Debugbar {}
            class Horizon extends \Laravel\Horizon\Horizon {}
            class Socialite extends \Laravel\Socialite\Facades\Socialite {}
            class Livewire extends \Livewire\Livewire {}
            class Saloon extends \Saloon\Laravel\Facades\Saloon {}
            class Flare extends \Spatie\LaravelIgnition\Facades\Flare {}
    }





