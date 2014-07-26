<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/css/9bc0f17')) {
            // _assetic_9bc0f17
            if ($pathinfo === '/css/9bc0f17.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9bc0f17',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_9bc0f17',);
            }

            // _assetic_9bc0f17_0
            if ($pathinfo === '/css/9bc0f17_group_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '9bc0f17',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_9bc0f17_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/be12ebc')) {
                // _assetic_be12ebc
                if ($pathinfo === '/js/be12ebc.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be12ebc',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_be12ebc',);
                }

                // _assetic_be12ebc_0
                if ($pathinfo === '/js/be12ebc_validate_group_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'be12ebc',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_be12ebc_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/71873f3')) {
                // _assetic_71873f3
                if ($pathinfo === '/js/71873f3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '71873f3',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_71873f3',);
                }

                // _assetic_71873f3_0
                if ($pathinfo === '/js/71873f3_login_user_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '71873f3',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_71873f3_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/c543be1')) {
                // _assetic_c543be1
                if ($pathinfo === '/js/c543be1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c543be1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c543be1',);
                }

                // _assetic_c543be1_0
                if ($pathinfo === '/js/c543be1_validate_seteo_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c543be1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c543be1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/d5662e1')) {
                // _assetic_d5662e1
                if ($pathinfo === '/js/d5662e1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5662e1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d5662e1',);
                }

                // _assetic_d5662e1_0
                if ($pathinfo === '/js/d5662e1_validate_newuser_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'd5662e1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d5662e1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/e7062b2')) {
                // _assetic_e7062b2
                if ($pathinfo === '/js/e7062b2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7062b2',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e7062b2',);
                }

                // _assetic_e7062b2_0
                if ($pathinfo === '/js/e7062b2_user_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e7062b2',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e7062b2_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/4b97b4d')) {
                // _assetic_4b97b4d
                if ($pathinfo === '/js/4b97b4d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b97b4d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4b97b4d',);
                }

                // _assetic_4b97b4d_0
                if ($pathinfo === '/js/4b97b4d_forgot_pass_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4b97b4d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4b97b4d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/cc01a9f')) {
                // _assetic_cc01a9f
                if ($pathinfo === '/js/cc01a9f.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cc01a9f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_cc01a9f',);
                }

                // _assetic_cc01a9f_0
                if ($pathinfo === '/js/cc01a9f_validate_profile_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'cc01a9f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_cc01a9f_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/1db7934')) {
                // _assetic_1db7934
                if ($pathinfo === '/js/1db7934.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1db7934',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_1db7934',);
                }

                // _assetic_1db7934_0
                if ($pathinfo === '/js/1db7934_change_pass_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '1db7934',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_1db7934_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/e8b976d')) {
                // _assetic_e8b976d
                if ($pathinfo === '/js/e8b976d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8b976d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_e8b976d',);
                }

                // _assetic_e8b976d_0
                if ($pathinfo === '/js/e8b976d_validate_moduser_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e8b976d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_e8b976d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/bf55089')) {
                // _assetic_bf55089
                if ($pathinfo === '/js/bf55089.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bf55089',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bf55089',);
                }

                // _assetic_bf55089_0
                if ($pathinfo === '/js/bf55089_validate_t_deposito_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bf55089',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bf55089_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/c34c3ec')) {
                // _assetic_c34c3ec
                if ($pathinfo === '/js/c34c3ec.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c34c3ec',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_c34c3ec',);
                }

                // _assetic_c34c3ec_0
                if ($pathinfo === '/js/c34c3ec_search_index_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c34c3ec',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_c34c3ec_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/22315e7')) {
                // _assetic_22315e7
                if ($pathinfo === '/js/22315e7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '22315e7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_22315e7',);
                }

                // _assetic_22315e7_0
                if ($pathinfo === '/js/22315e7_exportar_entidad_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '22315e7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_22315e7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/9338c5d')) {
                // _assetic_9338c5d
                if ($pathinfo === '/js/9338c5d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9338c5d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_9338c5d',);
                }

                // _assetic_9338c5d_0
                if ($pathinfo === '/js/9338c5d_validate_sucursal_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '9338c5d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_9338c5d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/f7351b7')) {
                // _assetic_f7351b7
                if ($pathinfo === '/js/f7351b7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7351b7',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f7351b7',);
                }

                // _assetic_f7351b7_0
                if ($pathinfo === '/js/f7351b7_validate_cliente_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f7351b7',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f7351b7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/26ec40d')) {
                // _assetic_26ec40d
                if ($pathinfo === '/js/26ec40d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ec40d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_26ec40d',);
                }

                // _assetic_26ec40d_0
                if ($pathinfo === '/js/26ec40d_validate_tipo_articulo_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '26ec40d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_26ec40d_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/f16ab08')) {
            // _assetic_f16ab08
            if ($pathinfo === '/css/f16ab08.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f16ab08',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f16ab08',);
            }

            // _assetic_f16ab08_0
            if ($pathinfo === '/css/f16ab08_group_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'f16ab08',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f16ab08_0',);
            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/3b0881c')) {
                // _assetic_3b0881c
                if ($pathinfo === '/js/3b0881c.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0881c',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_3b0881c',);
                }

                // _assetic_3b0881c_0
                if ($pathinfo === '/js/3b0881c_validate_sintoma_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '3b0881c',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_3b0881c_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/913d5f9')) {
                // _assetic_913d5f9
                if ($pathinfo === '/js/913d5f9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '913d5f9',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_913d5f9',);
                }

                // _assetic_913d5f9_0
                if ($pathinfo === '/js/913d5f9_validate_provincia_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '913d5f9',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_913d5f9_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/ed5e641')) {
                // _assetic_ed5e641
                if ($pathinfo === '/js/ed5e641.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed5e641',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_ed5e641',);
                }

                // _assetic_ed5e641_0
                if ($pathinfo === '/js/ed5e641_validate_modelo_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ed5e641',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_ed5e641_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/d')) {
                if (0 === strpos($pathinfo, '/js/d8a5c79')) {
                    // _assetic_d8a5c79
                    if ($pathinfo === '/js/d8a5c79.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8a5c79',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d8a5c79',);
                    }

                    // _assetic_d8a5c79_0
                    if ($pathinfo === '/js/d8a5c79_validate_tipo_ordeningreso_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd8a5c79',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d8a5c79_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/d7b855e')) {
                    // _assetic_d7b855e
                    if ($pathinfo === '/js/d7b855e.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd7b855e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_d7b855e',);
                    }

                    // _assetic_d7b855e_0
                    if ($pathinfo === '/js/d7b855e_validate_zona_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'd7b855e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_d7b855e_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/f595a92')) {
                // _assetic_f595a92
                if ($pathinfo === '/js/f595a92.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f595a92',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f595a92',);
                }

                // _assetic_f595a92_0
                if ($pathinfo === '/js/f595a92_validate_articulo_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f595a92',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f595a92_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/6072116')) {
                // _assetic_6072116
                if ($pathinfo === '/js/6072116.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6072116,  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6072116',);
                }

                // _assetic_6072116_0
                if ($pathinfo === '/js/6072116_validate_marca_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 6072116,  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6072116_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/98d0896')) {
                // _assetic_98d0896
                if ($pathinfo === '/js/98d0896.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '98d0896',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_98d0896',);
                }

                // _assetic_98d0896_0
                if ($pathinfo === '/js/98d0896_admin_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '98d0896',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_98d0896_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/panel')) {
            // backend_admin_homepage
            if (rtrim($pathinfo, '/') === '/panel') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'backend_admin_homepage');
                }

                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'backend_admin_homepage',);
            }

            // blank
            if ($pathinfo === '/panel/blank') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::blankAction',  '_route' => 'blank',);
            }

            if (0 === strpos($pathinfo, '/panel/cliente')) {
                // cliente_new
                if ($pathinfo === '/panel/cliente/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::newAction',  '_route' => 'cliente_new',);
                }

                // cliente_exportar
                if ($pathinfo === '/panel/cliente/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::exportarAction',  '_route' => 'cliente_exportar',);
                }

                // cliente_create
                if ($pathinfo === '/panel/cliente/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_cliente_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::createAction',  '_route' => 'cliente_create',);
                }
                not_cliente_create:

                // cliente_edit
                if (preg_match('#^/panel/cliente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::editAction',));
                }

                // cliente_update
                if (preg_match('#^/panel/cliente/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_cliente_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::updateAction',));
                }
                not_cliente_update:

                // cliente_delete
                if (preg_match('#^/panel/cliente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_cliente_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::deleteAction',));
                }
                not_cliente_delete:

                // cliente
                if (preg_match('#^/panel/cliente(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'cliente')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ClienteController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/marca')) {
                // marca_new
                if ($pathinfo === '/panel/marca/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::newAction',  '_route' => 'marca_new',);
                }

                // marca_exportar
                if ($pathinfo === '/panel/marca/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::exportarAction',  '_route' => 'marca_exportar',);
                }

                // marca_create
                if ($pathinfo === '/panel/marca/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_marca_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::createAction',  '_route' => 'marca_create',);
                }
                not_marca_create:

                // marca_edit
                if (preg_match('#^/panel/marca/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::editAction',));
                }

                // marca_update
                if (preg_match('#^/panel/marca/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_marca_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::updateAction',));
                }
                not_marca_update:

                // marca_delete
                if (preg_match('#^/panel/marca/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_marca_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::deleteAction',));
                }
                not_marca_delete:

                // marca
                if (preg_match('#^/panel/marca(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'marca')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\MarcaController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/provincia')) {
                // provincia_new
                if ($pathinfo === '/panel/provincia/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::newAction',  '_route' => 'provincia_new',);
                }

                // provincia_exportar
                if ($pathinfo === '/panel/provincia/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::exportarAction',  '_route' => 'provincia_exportar',);
                }

                // provincia_create
                if ($pathinfo === '/panel/provincia/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_provincia_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::createAction',  '_route' => 'provincia_create',);
                }
                not_provincia_create:

                // provincia_edit
                if (preg_match('#^/panel/provincia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::editAction',));
                }

                // provincia_update
                if (preg_match('#^/panel/provincia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_provincia_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::updateAction',));
                }
                not_provincia_update:

                // provincia_delete
                if (preg_match('#^/panel/provincia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_provincia_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::deleteAction',));
                }
                not_provincia_delete:

                // provincia
                if (preg_match('#^/panel/provincia(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'provincia')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ProvinciaController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/zona')) {
                // zona_new
                if ($pathinfo === '/panel/zona/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::newAction',  '_route' => 'zona_new',);
                }

                // zona_exportar
                if ($pathinfo === '/panel/zona/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::exportarAction',  '_route' => 'zona_exportar',);
                }

                // zona_create
                if ($pathinfo === '/panel/zona/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_zona_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::createAction',  '_route' => 'zona_create',);
                }
                not_zona_create:

                // zona_edit
                if (preg_match('#^/panel/zona/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::editAction',));
                }

                // zona_update
                if (preg_match('#^/panel/zona/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_zona_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::updateAction',));
                }
                not_zona_update:

                // zona_delete
                if (preg_match('#^/panel/zona/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_zona_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::deleteAction',));
                }
                not_zona_delete:

                // zona
                if (preg_match('#^/panel/zona(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'zona')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ZonaController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/modelo')) {
                // modelo_new
                if ($pathinfo === '/panel/modelo/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::newAction',  '_route' => 'modelo_new',);
                }

                // modelo_exportar
                if ($pathinfo === '/panel/modelo/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::exportarAction',  '_route' => 'modelo_exportar',);
                }

                // modelo_create
                if ($pathinfo === '/panel/modelo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_modelo_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::createAction',  '_route' => 'modelo_create',);
                }
                not_modelo_create:

                // modelo_edit
                if (preg_match('#^/panel/modelo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::editAction',));
                }

                // modelo_update
                if (preg_match('#^/panel/modelo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_modelo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::updateAction',));
                }
                not_modelo_update:

                // modelo_delete
                if (preg_match('#^/panel/modelo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_modelo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::deleteAction',));
                }
                not_modelo_delete:

                // modelo
                if (preg_match('#^/panel/modelo(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modelo')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ModeloController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/s')) {
                if (0 === strpos($pathinfo, '/panel/sintoma')) {
                    // sintoma_new
                    if ($pathinfo === '/panel/sintoma/new') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::newAction',  '_route' => 'sintoma_new',);
                    }

                    // sintoma_exportar
                    if ($pathinfo === '/panel/sintoma/exportar') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::exportarAction',  '_route' => 'sintoma_exportar',);
                    }

                    // sintoma_create
                    if ($pathinfo === '/panel/sintoma/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sintoma_create;
                        }

                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::createAction',  '_route' => 'sintoma_create',);
                    }
                    not_sintoma_create:

                    // sintoma_edit
                    if (preg_match('#^/panel/sintoma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sintoma_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::editAction',));
                    }

                    // sintoma_update
                    if (preg_match('#^/panel/sintoma/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_sintoma_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sintoma_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::updateAction',));
                    }
                    not_sintoma_update:

                    // sintoma_delete
                    if (preg_match('#^/panel/sintoma/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_sintoma_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sintoma_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::deleteAction',));
                    }
                    not_sintoma_delete:

                    // sintoma
                    if (preg_match('#^/panel/sintoma(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sintoma')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SintomaController::indexAction',  'search' => '',));
                    }

                }

                if (0 === strpos($pathinfo, '/panel/sucursal')) {
                    // sucursal_new
                    if ($pathinfo === '/panel/sucursal/new') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::newAction',  '_route' => 'sucursal_new',);
                    }

                    // sucursal_exportar
                    if ($pathinfo === '/panel/sucursal/exportar') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::exportarAction',  '_route' => 'sucursal_exportar',);
                    }

                    // sucursal_create
                    if ($pathinfo === '/panel/sucursal/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_sucursal_create;
                        }

                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::createAction',  '_route' => 'sucursal_create',);
                    }
                    not_sucursal_create:

                    // sucursal_edit
                    if (preg_match('#^/panel/sucursal/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::editAction',));
                    }

                    // sucursal_update
                    if (preg_match('#^/panel/sucursal/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_sucursal_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::updateAction',));
                    }
                    not_sucursal_update:

                    // sucursal_delete
                    if (preg_match('#^/panel/sucursal/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_sucursal_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::deleteAction',));
                    }
                    not_sucursal_delete:

                    // sucursal
                    if (preg_match('#^/panel/sucursal(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sucursal')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\SucursalController::indexAction',  'search' => '',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/panel/areaTrabajo')) {
                // areaTrabajo_new
                if ($pathinfo === '/panel/areaTrabajo/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::newAction',  '_route' => 'areaTrabajo_new',);
                }

                // areaTrabajo_exportar
                if ($pathinfo === '/panel/areaTrabajo/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::exportarAction',  '_route' => 'areaTrabajo_exportar',);
                }

                // areaTrabajo_create
                if ($pathinfo === '/panel/areaTrabajo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_areaTrabajo_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::createAction',  '_route' => 'areaTrabajo_create',);
                }
                not_areaTrabajo_create:

                // areaTrabajo_edit
                if (preg_match('#^/panel/areaTrabajo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaTrabajo_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::editAction',));
                }

                // areaTrabajo_update
                if (preg_match('#^/panel/areaTrabajo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_areaTrabajo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaTrabajo_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::updateAction',));
                }
                not_areaTrabajo_update:

                // areaTrabajo_delete
                if (preg_match('#^/panel/areaTrabajo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_areaTrabajo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaTrabajo_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::deleteAction',));
                }
                not_areaTrabajo_delete:

                // areaTrabajo
                if (preg_match('#^/panel/areaTrabajo(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'areaTrabajo')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\AreaTrabajoController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/tipo')) {
                if (0 === strpos($pathinfo, '/panel/tipoDeposito')) {
                    // tipoDeposito_new
                    if ($pathinfo === '/panel/tipoDeposito/new') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::newAction',  '_route' => 'tipoDeposito_new',);
                    }

                    // tipoDeposito_exportar
                    if ($pathinfo === '/panel/tipoDeposito/exportar') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::exportarAction',  '_route' => 'tipoDeposito_exportar',);
                    }

                    // tipoDeposito_create
                    if ($pathinfo === '/panel/tipoDeposito/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipoDeposito_create;
                        }

                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::createAction',  '_route' => 'tipoDeposito_create',);
                    }
                    not_tipoDeposito_create:

                    // tipoDeposito_edit
                    if (preg_match('#^/panel/tipoDeposito/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoDeposito_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::editAction',));
                    }

                    // tipoDeposito_update
                    if (preg_match('#^/panel/tipoDeposito/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_tipoDeposito_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoDeposito_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::updateAction',));
                    }
                    not_tipoDeposito_update:

                    // tipoDeposito_delete
                    if (preg_match('#^/panel/tipoDeposito/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_tipoDeposito_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoDeposito_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::deleteAction',));
                    }
                    not_tipoDeposito_delete:

                    // tipoDeposito
                    if (preg_match('#^/panel/tipoDeposito(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoDeposito')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoDepositoController::indexAction',  'search' => '',));
                    }

                }

                if (0 === strpos($pathinfo, '/panel/tipo_articulo')) {
                    // tipo_articulo_new
                    if ($pathinfo === '/panel/tipo_articulo/new') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::newAction',  '_route' => 'tipo_articulo_new',);
                    }

                    // tipo_articulo_exportar
                    if ($pathinfo === '/panel/tipo_articulo/exportar') {
                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::exportarAction',  '_route' => 'tipo_articulo_exportar',);
                    }

                    // tipo_articulo_create
                    if ($pathinfo === '/panel/tipo_articulo/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tipo_articulo_create;
                        }

                        return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::createAction',  '_route' => 'tipo_articulo_create',);
                    }
                    not_tipo_articulo_create:

                    // tipo_articulo_edit
                    if (preg_match('#^/panel/tipo_articulo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_articulo_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::editAction',));
                    }

                    // tipo_articulo_update
                    if (preg_match('#^/panel/tipo_articulo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_tipo_articulo_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_articulo_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::updateAction',));
                    }
                    not_tipo_articulo_update:

                    // tipo_articulo_delete
                    if (preg_match('#^/panel/tipo_articulo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_tipo_articulo_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_articulo_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::deleteAction',));
                    }
                    not_tipo_articulo_delete:

                    // tipo_articulo
                    if (preg_match('#^/panel/tipo_articulo(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_articulo')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoArticuloController::indexAction',  'search' => '',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/panel/articulo')) {
                // articulo_new
                if ($pathinfo === '/panel/articulo/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::newAction',  '_route' => 'articulo_new',);
                }

                // articulo_exportar
                if ($pathinfo === '/panel/articulo/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::exportarAction',  '_route' => 'articulo_exportar',);
                }

                // articulo_create
                if ($pathinfo === '/panel/articulo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_articulo_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::createAction',  '_route' => 'articulo_create',);
                }
                not_articulo_create:

                // articulo_edit
                if (preg_match('#^/panel/articulo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::editAction',));
                }

                // articulo_update
                if (preg_match('#^/panel/articulo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_articulo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::updateAction',));
                }
                not_articulo_update:

                // articulo_delete
                if (preg_match('#^/panel/articulo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_articulo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::deleteAction',));
                }
                not_articulo_delete:

                // articulo
                if (preg_match('#^/panel/articulo(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'articulo')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\ArticuloController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/tipo_ordeningreso')) {
                // tipo_ordeningreso_new
                if ($pathinfo === '/panel/tipo_ordeningreso/new') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::newAction',  '_route' => 'tipo_ordeningreso_new',);
                }

                // tipo_ordeningreso_exportar
                if ($pathinfo === '/panel/tipo_ordeningreso/exportar') {
                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::exportarAction',  '_route' => 'tipo_ordeningreso_exportar',);
                }

                // tipo_ordeningreso_create
                if ($pathinfo === '/panel/tipo_ordeningreso/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_tipo_ordeningreso_create;
                    }

                    return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::createAction',  '_route' => 'tipo_ordeningreso_create',);
                }
                not_tipo_ordeningreso_create:

                // tipo_ordeningreso_edit
                if (preg_match('#^/panel/tipo_ordeningreso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_ordeningreso_edit')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::editAction',));
                }

                // tipo_ordeningreso_update
                if (preg_match('#^/panel/tipo_ordeningreso/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_tipo_ordeningreso_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_ordeningreso_update')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::updateAction',));
                }
                not_tipo_ordeningreso_update:

                // tipo_ordeningreso_delete
                if (preg_match('#^/panel/tipo_ordeningreso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_tipo_ordeningreso_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_ordeningreso_delete')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::deleteAction',));
                }
                not_tipo_ordeningreso_delete:

                // tipo_ordeningreso
                if (preg_match('#^/panel/tipo_ordeningreso(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipo_ordeningreso')), array (  '_controller' => 'Backend\\AdminBundle\\Controller\\TipoOrdenIngresoController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/user')) {
                // user_show
                if (preg_match('#^/panel/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::showAction',));
                }

                // user_new
                if ($pathinfo === '/panel/user/new_user') {
                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
                }

                // user_create
                if ($pathinfo === '/panel/user/create_user') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_user_create;
                    }

                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
                }
                not_user_create:

                // user_edit
                if (preg_match('#^/panel/user/(?P<id>[^/]++)/edit_user$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::editAction',));
                }

                // user_update
                if (preg_match('#^/panel/user/(?P<id>[^/]++)/update_user$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_update')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::updateAction',));
                }
                not_user_update:

                // user_delete
                if (preg_match('#^/panel/user/(?P<id>[^/]++)/delete_user$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'DELETE', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'DELETE', 'HEAD'));
                        goto not_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::deleteAction',));
                }
                not_user_delete:

                // profile
                if ($pathinfo === '/panel/user/profile') {
                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::profileAction',  '_route' => 'profile',);
                }

                // user
                if (preg_match('#^/panel/user(?:/(?P<search>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::indexAction',  'search' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/panel/group')) {
                // group
                if (rtrim($pathinfo, '/') === '/panel/group') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'group');
                    }

                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::indexAction',  '_route' => 'group',);
                }

                // group_show
                if (preg_match('#^/panel/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_show')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::showAction',));
                }

                // group_new
                if ($pathinfo === '/panel/group/new') {
                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::newAction',  '_route' => 'group_new',);
                }

                // group_create
                if ($pathinfo === '/panel/group/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_group_create;
                    }

                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::createAction',  '_route' => 'group_create',);
                }
                not_group_create:

                // group_edit
                if (preg_match('#^/panel/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_edit')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::editAction',));
                }

                // group_update
                if (preg_match('#^/panel/group/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_group_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_update')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::updateAction',));
                }
                not_group_update:

                // group_delete
                if (preg_match('#^/panel/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_group_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'group_delete')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\GroupController::deleteAction',));
                }
                not_group_delete:

            }

            if (0 === strpos($pathinfo, '/panel/seteo')) {
                // seteo
                if (rtrim($pathinfo, '/') === '/panel/seteo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'seteo');
                    }

                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::indexAction',  '_route' => 'seteo',);
                }

                // seteo_show
                if (preg_match('#^/panel/seteo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seteo_show')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::showAction',));
                }

                // seteo_new
                if ($pathinfo === '/panel/seteo/new') {
                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::newAction',  '_route' => 'seteo_new',);
                }

                // seteo_create
                if ($pathinfo === '/panel/seteo/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_seteo_create;
                    }

                    return array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::createAction',  '_route' => 'seteo_create',);
                }
                not_seteo_create:

                // seteo_edit
                if (preg_match('#^/panel/seteo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seteo_edit')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::editAction',));
                }

                // seteo_update
                if (preg_match('#^/panel/seteo/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_seteo_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seteo_update')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::updateAction',));
                }
                not_seteo_update:

                // seteo_delete
                if (preg_match('#^/panel/seteo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_seteo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'seteo_delete')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\SeteoController::deleteAction',));
                }
                not_seteo_delete:

            }

            // home
            if ($pathinfo === '/panel') {
                return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'home',);
            }

            if (0 === strpos($pathinfo, '/panel/log')) {
                if (0 === strpos($pathinfo, '/panel/login')) {
                    // login
                    if ($pathinfo === '/panel/login') {
                        return array (  '_controller' => 'Backend\\UserBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
                    }

                    // login_check
                    if ($pathinfo === '/panel/login_check') {
                        return array('_route' => 'login_check');
                    }

                }

                // logout
                if ($pathinfo === '/panel/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        // register_user
        if ($pathinfo === '/register_user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_register_user;
            }

            return array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::registerAction',  '_route' => 'register_user',);
        }
        not_register_user:

        // activate_account
        if (0 === strpos($pathinfo, '/activar') && preg_match('#^/activar(?:/(?P<codigo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate_account')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::activateAccountAction',  'codigo' => '',));
        }

        // forgot_pass
        if ($pathinfo === '/forgot_pass') {
            return array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::forgotPasswordAction',  '_route' => 'forgot_pass',);
        }

        // change_pass
        if (0 === strpos($pathinfo, '/change_pass') && preg_match('#^/change_pass(?:/(?P<codigo>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'change_pass')), array (  '_controller' => 'Backend\\UserBundle\\Controller\\UserController::changePasswordAction',  'codigo' => '',));
        }

        // access_denied
        if ($pathinfo === '/panel/acess') {
            return array (  '_controller' => 'Backend\\AdminBundle\\Controller\\DefaultController::accessAction',  '_route' => 'access_denied',);
        }

        // principal
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'principal');
            }

            return array (  '_controller' => 'Backend\\UserBundle\\Controller\\DefaultController::loginAction',  '_route' => 'principal',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
