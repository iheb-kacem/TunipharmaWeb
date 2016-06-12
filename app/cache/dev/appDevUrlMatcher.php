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
        $context = $this->context;
        $request = $this->request;

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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\DefaultController::indexAction',  '_route' => '_welcome',);
        }

        // _pharmacie
        if (0 === strpos($pathinfo, '/pharmacie') && preg_match('#^/pharmacie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_pharmacie')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieController::PharmacieAction',));
        }

        // _EspacePharmacien
        if (rtrim($pathinfo, '/') === '/espacePharmacien') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_EspacePharmacien');
            }

            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienController::EspaceAction',  '_route' => '_EspacePharmacien',);
        }

        if (0 === strpos($pathinfo, '/se')) {
            // _rechercher
            if (rtrim($pathinfo, '/') === '/search') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_rechercher');
                }

                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\RechercheController::SearchAction',  '_route' => '_rechercher',);
            }

            // _service
            if (rtrim($pathinfo, '/') === '/service') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_service');
                }

                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceController::ServiceAction',  '_route' => '_service',);
            }

            // _rechercher_delegations
            if ($pathinfo === '/search/delegations') {
                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\RechercheController::delegationsAction',  '_route' => '_rechercher_delegations',);
            }

        }

        if (0 === strpos($pathinfo, '/espacePharmacien')) {
            // _gardes
            if ($pathinfo === '/espacePharmacien/gardes') {
                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienController::getGardeAction',  '_route' => '_gardes',);
            }

            // _EspacePharmacien_saveus
            if ($pathinfo === '/espacePharmacien/saveus') {
                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienController::SaveusAction',  '_route' => '_EspacePharmacien_saveus',);
            }

        }

        // _blog
        if ($pathinfo === '/blog') {
            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\DefaultController::blogAction',  '_route' => '_blog',);
        }

        // _contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\DefaultController::contactAction',  '_route' => '_contact',);
        }

        if (0 === strpos($pathinfo, '/add-service')) {
            // _add_service
            if ($pathinfo === '/add-service') {
                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\AddServiceController::ServiceAction',  '_route' => '_add_service',);
            }

            // _add_service_name
            if ($pathinfo === '/add-service/name') {
                return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\AddServiceController::NameAction',  '_route' => '_add_service_name',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'TuniPharma\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/passwd/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/tunipharma/main')) {
                if (0 === strpos($pathinfo, '/admin/tunipharma/main/pharmacie')) {
                    // admin_tunipharma_main_pharmacie_list
                    if ($pathinfo === '/admin/tunipharma/main/pharmacie/list') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::listAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_list',  '_route' => 'admin_tunipharma_main_pharmacie_list',);
                    }

                    // admin_tunipharma_main_pharmacie_create
                    if ($pathinfo === '/admin/tunipharma/main/pharmacie/create') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::createAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_create',  '_route' => 'admin_tunipharma_main_pharmacie_create',);
                    }

                    // admin_tunipharma_main_pharmacie_batch
                    if ($pathinfo === '/admin/tunipharma/main/pharmacie/batch') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::batchAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_batch',  '_route' => 'admin_tunipharma_main_pharmacie_batch',);
                    }

                    // admin_tunipharma_main_pharmacie_edit
                    if (preg_match('#^/admin/tunipharma/main/pharmacie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacie_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::editAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_edit',));
                    }

                    // admin_tunipharma_main_pharmacie_delete
                    if (preg_match('#^/admin/tunipharma/main/pharmacie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacie_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::deleteAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_delete',));
                    }

                    // admin_tunipharma_main_pharmacie_show
                    if (preg_match('#^/admin/tunipharma/main/pharmacie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacie_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::showAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_show',));
                    }

                    // admin_tunipharma_main_pharmacie_export
                    if ($pathinfo === '/admin/tunipharma/main/pharmacie/export') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieAdminController::exportAction',  '_sonata_admin' => 'main.admin.pharmacie',  '_sonata_name' => 'admin_tunipharma_main_pharmacie_export',  '_route' => 'admin_tunipharma_main_pharmacie_export',);
                    }

                    if (0 === strpos($pathinfo, '/admin/tunipharma/main/pharmacien')) {
                        // admin_tunipharma_main_pharmacien_list
                        if ($pathinfo === '/admin/tunipharma/main/pharmacien/list') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::listAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_list',  '_route' => 'admin_tunipharma_main_pharmacien_list',);
                        }

                        // admin_tunipharma_main_pharmacien_create
                        if ($pathinfo === '/admin/tunipharma/main/pharmacien/create') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::createAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_create',  '_route' => 'admin_tunipharma_main_pharmacien_create',);
                        }

                        // admin_tunipharma_main_pharmacien_batch
                        if ($pathinfo === '/admin/tunipharma/main/pharmacien/batch') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::batchAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_batch',  '_route' => 'admin_tunipharma_main_pharmacien_batch',);
                        }

                        // admin_tunipharma_main_pharmacien_edit
                        if (preg_match('#^/admin/tunipharma/main/pharmacien/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacien_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::editAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_edit',));
                        }

                        // admin_tunipharma_main_pharmacien_delete
                        if (preg_match('#^/admin/tunipharma/main/pharmacien/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacien_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::deleteAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_delete',));
                        }

                        // admin_tunipharma_main_pharmacien_show
                        if (preg_match('#^/admin/tunipharma/main/pharmacien/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmacien_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::showAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_show',));
                        }

                        // admin_tunipharma_main_pharmacien_export
                        if ($pathinfo === '/admin/tunipharma/main/pharmacien/export') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacienAdminController::exportAction',  '_sonata_admin' => 'main.admin.pharmacien',  '_sonata_name' => 'admin_tunipharma_main_pharmacien_export',  '_route' => 'admin_tunipharma_main_pharmacien_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/tunipharma/main/service')) {
                    // admin_tunipharma_main_service_list
                    if ($pathinfo === '/admin/tunipharma/main/service/list') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::listAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_list',  '_route' => 'admin_tunipharma_main_service_list',);
                    }

                    // admin_tunipharma_main_service_create
                    if ($pathinfo === '/admin/tunipharma/main/service/create') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::createAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_create',  '_route' => 'admin_tunipharma_main_service_create',);
                    }

                    // admin_tunipharma_main_service_batch
                    if ($pathinfo === '/admin/tunipharma/main/service/batch') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::batchAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_batch',  '_route' => 'admin_tunipharma_main_service_batch',);
                    }

                    // admin_tunipharma_main_service_edit
                    if (preg_match('#^/admin/tunipharma/main/service/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_service_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::editAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_edit',));
                    }

                    // admin_tunipharma_main_service_delete
                    if (preg_match('#^/admin/tunipharma/main/service/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_service_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::deleteAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_delete',));
                    }

                    // admin_tunipharma_main_service_show
                    if (preg_match('#^/admin/tunipharma/main/service/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_service_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::showAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_show',));
                    }

                    // admin_tunipharma_main_service_export
                    if ($pathinfo === '/admin/tunipharma/main/service/export') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ServiceAdminController::exportAction',  '_sonata_admin' => 'main.admin.service',  '_sonata_name' => 'admin_tunipharma_main_service_export',  '_route' => 'admin_tunipharma_main_service_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/tunipharma/main/c')) {
                    if (0 === strpos($pathinfo, '/admin/tunipharma/main/categorie')) {
                        // admin_tunipharma_main_categorie_list
                        if ($pathinfo === '/admin/tunipharma/main/categorie/list') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::listAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_list',  '_route' => 'admin_tunipharma_main_categorie_list',);
                        }

                        // admin_tunipharma_main_categorie_create
                        if ($pathinfo === '/admin/tunipharma/main/categorie/create') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::createAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_create',  '_route' => 'admin_tunipharma_main_categorie_create',);
                        }

                        // admin_tunipharma_main_categorie_batch
                        if ($pathinfo === '/admin/tunipharma/main/categorie/batch') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::batchAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_batch',  '_route' => 'admin_tunipharma_main_categorie_batch',);
                        }

                        // admin_tunipharma_main_categorie_edit
                        if (preg_match('#^/admin/tunipharma/main/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_categorie_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::editAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_edit',));
                        }

                        // admin_tunipharma_main_categorie_delete
                        if (preg_match('#^/admin/tunipharma/main/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_categorie_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::deleteAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_delete',));
                        }

                        // admin_tunipharma_main_categorie_show
                        if (preg_match('#^/admin/tunipharma/main/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_categorie_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::showAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_show',));
                        }

                        // admin_tunipharma_main_categorie_export
                        if ($pathinfo === '/admin/tunipharma/main/categorie/export') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CategorieAdminController::exportAction',  '_sonata_admin' => 'main.admin.categorie',  '_sonata_name' => 'admin_tunipharma_main_categorie_export',  '_route' => 'admin_tunipharma_main_categorie_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/tunipharma/main/clientfacebook')) {
                        // admin_tunipharma_main_clientfacebook_list
                        if ($pathinfo === '/admin/tunipharma/main/clientfacebook/list') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::listAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_list',  '_route' => 'admin_tunipharma_main_clientfacebook_list',);
                        }

                        // admin_tunipharma_main_clientfacebook_create
                        if ($pathinfo === '/admin/tunipharma/main/clientfacebook/create') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::createAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_create',  '_route' => 'admin_tunipharma_main_clientfacebook_create',);
                        }

                        // admin_tunipharma_main_clientfacebook_batch
                        if ($pathinfo === '/admin/tunipharma/main/clientfacebook/batch') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::batchAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_batch',  '_route' => 'admin_tunipharma_main_clientfacebook_batch',);
                        }

                        // admin_tunipharma_main_clientfacebook_edit
                        if (preg_match('#^/admin/tunipharma/main/clientfacebook/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_clientfacebook_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::editAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_edit',));
                        }

                        // admin_tunipharma_main_clientfacebook_delete
                        if (preg_match('#^/admin/tunipharma/main/clientfacebook/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_clientfacebook_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::deleteAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_delete',));
                        }

                        // admin_tunipharma_main_clientfacebook_show
                        if (preg_match('#^/admin/tunipharma/main/clientfacebook/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_clientfacebook_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::showAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_show',));
                        }

                        // admin_tunipharma_main_clientfacebook_export
                        if ($pathinfo === '/admin/tunipharma/main/clientfacebook/export') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\ClientfacebookAdminController::exportAction',  '_sonata_admin' => 'main.admin.clientfacebook',  '_sonata_name' => 'admin_tunipharma_main_clientfacebook_export',  '_route' => 'admin_tunipharma_main_clientfacebook_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/tunipharma/main/commentaire')) {
                        // admin_tunipharma_main_commentaire_list
                        if ($pathinfo === '/admin/tunipharma/main/commentaire/list') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::listAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_list',  '_route' => 'admin_tunipharma_main_commentaire_list',);
                        }

                        // admin_tunipharma_main_commentaire_create
                        if ($pathinfo === '/admin/tunipharma/main/commentaire/create') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::createAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_create',  '_route' => 'admin_tunipharma_main_commentaire_create',);
                        }

                        // admin_tunipharma_main_commentaire_batch
                        if ($pathinfo === '/admin/tunipharma/main/commentaire/batch') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::batchAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_batch',  '_route' => 'admin_tunipharma_main_commentaire_batch',);
                        }

                        // admin_tunipharma_main_commentaire_edit
                        if (preg_match('#^/admin/tunipharma/main/commentaire/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_commentaire_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::editAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_edit',));
                        }

                        // admin_tunipharma_main_commentaire_delete
                        if (preg_match('#^/admin/tunipharma/main/commentaire/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_commentaire_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::deleteAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_delete',));
                        }

                        // admin_tunipharma_main_commentaire_show
                        if (preg_match('#^/admin/tunipharma/main/commentaire/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_commentaire_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::showAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_show',));
                        }

                        // admin_tunipharma_main_commentaire_export
                        if ($pathinfo === '/admin/tunipharma/main/commentaire/export') {
                            return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\CommentaireAdminController::exportAction',  '_sonata_admin' => 'main.admin.commentaire',  '_sonata_name' => 'admin_tunipharma_main_commentaire_export',  '_route' => 'admin_tunipharma_main_commentaire_export',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/tunipharma/main/pharmaciegarde')) {
                    // admin_tunipharma_main_pharmaciegarde_list
                    if ($pathinfo === '/admin/tunipharma/main/pharmaciegarde/list') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::listAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_list',  '_route' => 'admin_tunipharma_main_pharmaciegarde_list',);
                    }

                    // admin_tunipharma_main_pharmaciegarde_create
                    if ($pathinfo === '/admin/tunipharma/main/pharmaciegarde/create') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::createAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_create',  '_route' => 'admin_tunipharma_main_pharmaciegarde_create',);
                    }

                    // admin_tunipharma_main_pharmaciegarde_batch
                    if ($pathinfo === '/admin/tunipharma/main/pharmaciegarde/batch') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::batchAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_batch',  '_route' => 'admin_tunipharma_main_pharmaciegarde_batch',);
                    }

                    // admin_tunipharma_main_pharmaciegarde_edit
                    if (preg_match('#^/admin/tunipharma/main/pharmaciegarde/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmaciegarde_edit')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::editAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_edit',));
                    }

                    // admin_tunipharma_main_pharmaciegarde_delete
                    if (preg_match('#^/admin/tunipharma/main/pharmaciegarde/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmaciegarde_delete')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::deleteAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_delete',));
                    }

                    // admin_tunipharma_main_pharmaciegarde_show
                    if (preg_match('#^/admin/tunipharma/main/pharmaciegarde/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tunipharma_main_pharmaciegarde_show')), array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::showAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_show',));
                    }

                    // admin_tunipharma_main_pharmaciegarde_export
                    if ($pathinfo === '/admin/tunipharma/main/pharmaciegarde/export') {
                        return array (  '_controller' => 'TuniPharma\\MainBundle\\Controller\\PharmacieGardeAdminController::exportAction',  '_sonata_admin' => 'main.admin.pharmacie_garde',  '_sonata_name' => 'admin_tunipharma_main_pharmaciegarde_export',  '_route' => 'admin_tunipharma_main_pharmaciegarde_export',);
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
