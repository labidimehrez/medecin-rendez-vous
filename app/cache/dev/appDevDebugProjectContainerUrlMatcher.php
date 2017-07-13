<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // back_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'back_homepage');
                }

                return array (  '_controller' => 'BackBundle\\Controller\\BackController::indexAction',  '_route' => 'back_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/mode-paiment')) {
                // add_modepaiment
                if ($pathinfo === '/admin/mode-paiment/ajouter') {
                    return array (  '_controller' => 'BackBundle\\Controller\\ModepaimentController::addAction',  '_route' => 'add_modepaiment',);
                }

                // edit_modepaiment
                if (0 === strpos($pathinfo, '/admin/mode-paiment/modifier') && preg_match('#^/admin/mode\\-paiment/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_modepaiment')), array (  '_controller' => 'BackBundle\\Controller\\ModepaimentController::editAction',));
                }

                // show_modepaiment
                if (rtrim($pathinfo, '/') === '/admin/mode-paiment') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_modepaiment');
                    }

                    return array (  '_controller' => 'BackBundle\\Controller\\ModepaimentController::showAction',  '_route' => 'show_modepaiment',);
                }

                // delete_modepaiment
                if (0 === strpos($pathinfo, '/admin/mode-paiment/supprimer') && preg_match('#^/admin/mode\\-paiment/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_modepaiment')), array (  '_controller' => 'BackBundle\\Controller\\ModepaimentController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/rendez-vous')) {
                // add_rendezvous
                if ($pathinfo === '/admin/rendez-vous/ajouter') {
                    return array (  '_controller' => 'BackBundle\\Controller\\RendezvousController::addAction',  '_route' => 'add_rendezvous',);
                }

                // edit_rendezvous
                if (0 === strpos($pathinfo, '/admin/rendez-vous/modifier') && preg_match('#^/admin/rendez\\-vous/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_rendezvous')), array (  '_controller' => 'BackBundle\\Controller\\RendezvousController::editAction',));
                }

                // show_rendezvous
                if (rtrim($pathinfo, '/') === '/admin/rendez-vous') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_rendezvous');
                    }

                    return array (  '_controller' => 'BackBundle\\Controller\\RendezvousController::showAction',  '_route' => 'show_rendezvous',);
                }

                // delete_rendezvous
                if (0 === strpos($pathinfo, '/admin/rendez-vous/supprimer') && preg_match('#^/admin/rendez\\-vous/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_rendezvous')), array (  '_controller' => 'BackBundle\\Controller\\RendezvousController::deleteAction',));
                }

                // valider_RDV
                if (0 === strpos($pathinfo, '/admin/rendez-vous/valider-RDV') && preg_match('#^/admin/rendez\\-vous/valider\\-RDV/(?P<date>[^/]++)/(?P<type>[^/]++)/(?P<medecinId>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'valider_RDV');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'valider_RDV')), array (  '_controller' => 'BackBundle\\Controller\\RendezvousController::creerRDVAction',));
                }

            }

        }

        // front_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'front_homepage');
            }

            return array (  '_controller' => 'FrontBundle\\Controller\\FrontController::indexAction',  '_route' => 'front_homepage',);
        }

        // front_contactus
        if ($pathinfo === '/contactez-nous') {
            return array (  '_controller' => 'FrontBundle\\Controller\\FrontController::contactusAction',  '_route' => 'front_contactus',);
        }

        // front_prendre_rdv_listing
        if ($pathinfo === '/prendre-rendez-vous') {
            return array (  '_controller' => 'FrontBundle\\Controller\\FrontController::prendreRDVlistingAction',  '_route' => 'front_prendre_rdv_listing',);
        }

        // front_choisir_rdv
        if (0 === strpos($pathinfo, '/choisir-rendez-vous') && preg_match('#^/choisir\\-rendez\\-vous/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_choisir_rdv')), array (  '_controller' => 'FrontBundle\\Controller\\FrontController::choisirRDVAction',));
        }

        // front_je_prends_rdv
        if (0 === strpos($pathinfo, '/je-prends-rendez-vous') && preg_match('#^/je\\-prends\\-rendez\\-vous/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_je_prends_rdv')), array (  '_controller' => 'FrontBundle\\Controller\\FrontController::jeprendsRDVAction',));
        }

        if (0 === strpos($pathinfo, '/valider')) {
            // front_valider_rdv
            if (0 === strpos($pathinfo, '/valider/je-valide-mon-rendez-vous') && preg_match('#^/valider/je\\-valide\\-mon\\-rendez\\-vous/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_valider_rdv')), array (  '_controller' => 'FrontBundle\\Controller\\FrontController::validerAction',));
            }

            // front_confirmation_validation_rdv
            if (0 === strpos($pathinfo, '/valider/mon-rendez-vous-confirme') && preg_match('#^/valider/mon\\-rendez\\-vous\\-confirme/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'front_confirmation_validation_rdv')), array (  '_controller' => 'FrontBundle\\Controller\\FrontController::confirmerRDVAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // security_user_homepage
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'security_user_homepage');
                }

                return array (  '_controller' => 'SecurityUserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'security_user_homepage',);
            }

            if (0 === strpos($pathinfo, '/admin/specialite')) {
                // add_specialite
                if ($pathinfo === '/admin/specialite/ajouter') {
                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\SpecialiteController::addAction',  '_route' => 'add_specialite',);
                }

                // edit_specialite
                if (0 === strpos($pathinfo, '/admin/specialite/modifier') && preg_match('#^/admin/specialite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_specialite')), array (  '_controller' => 'SecurityUserBundle\\Controller\\SpecialiteController::editAction',));
                }

                // show_specialite
                if (rtrim($pathinfo, '/') === '/admin/specialite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_specialite');
                    }

                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\SpecialiteController::showAction',  '_route' => 'show_specialite',);
                }

                // delete_specialite
                if (0 === strpos($pathinfo, '/admin/specialite/supprimer') && preg_match('#^/admin/specialite/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_specialite')), array (  '_controller' => 'SecurityUserBundle\\Controller\\SpecialiteController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/raison-visite')) {
                // add_raisonvisite
                if ($pathinfo === '/admin/raison-visite/ajouter') {
                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\RaisonVisiteController::addAction',  '_route' => 'add_raisonvisite',);
                }

                // edit_raisonvisite
                if (0 === strpos($pathinfo, '/admin/raison-visite/modifier') && preg_match('#^/admin/raison\\-visite/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_raisonvisite')), array (  '_controller' => 'SecurityUserBundle\\Controller\\RaisonVisiteController::editAction',));
                }

                // show_raisonvisite
                if (rtrim($pathinfo, '/') === '/admin/raison-visite') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_raisonvisite');
                    }

                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\RaisonVisiteController::showAction',  '_route' => 'show_raisonvisite',);
                }

                // delete_raisonvisite
                if (0 === strpos($pathinfo, '/admin/raison-visite/supprimer') && preg_match('#^/admin/raison\\-visite/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_raisonvisite')), array (  '_controller' => 'SecurityUserBundle\\Controller\\RaisonVisiteController::deleteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin/medecin')) {
                // add_medecin
                if ($pathinfo === '/admin/medecin/ajouter') {
                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\MedecinController::addAction',  '_route' => 'add_medecin',);
                }

                // edit_medecin
                if (0 === strpos($pathinfo, '/admin/medecin/modifier') && preg_match('#^/admin/medecin/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_medecin')), array (  '_controller' => 'SecurityUserBundle\\Controller\\MedecinController::editAction',));
                }

                // show_medecin
                if (rtrim($pathinfo, '/') === '/admin/medecin') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'show_medecin');
                    }

                    return array (  '_controller' => 'SecurityUserBundle\\Controller\\MedecinController::showAction',  '_route' => 'show_medecin',);
                }

                // delete_medecin
                if (0 === strpos($pathinfo, '/admin/medecin/supprimer') && preg_match('#^/admin/medecin/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_medecin')), array (  '_controller' => 'SecurityUserBundle\\Controller\\MedecinController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'main_homepage');
            }

            return array (  '_controller' => 'MainBundle\\Controller\\DefaultController::indexAction',  '_route' => 'main_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
