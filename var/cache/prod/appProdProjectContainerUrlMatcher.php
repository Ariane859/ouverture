<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // morale_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'MoraleBundle\\Controller\\DefaultController::indexAction',  '_route' => 'morale_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_morale_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'morale_default_index'));
            }

            return $ret;
        }
        not_morale_default_index:

        if (0 === strpos($pathinfo, '/morale')) {
            // morale_index
            if ('/morale' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'MoraleBundle\\Controller\\MoraleController::indexAction',  '_route' => 'morale_index',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_morale_index;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'morale_index'));
                }

                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_morale_index;
                }

                return $ret;
            }
            not_morale_index:

            // morale_new
            if ('/morale/new' === $pathinfo) {
                $ret = array (  '_controller' => 'MoraleBundle\\Controller\\MoraleController::newAction',  '_route' => 'morale_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_morale_new;
                }

                return $ret;
            }
            not_morale_new:

            // morale_show
            if (preg_match('#^/morale/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'morale_show')), array (  '_controller' => 'MoraleBundle\\Controller\\MoraleController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_morale_show;
                }

                return $ret;
            }
            not_morale_show:

            // morale_edit
            if (preg_match('#^/morale/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'morale_edit')), array (  '_controller' => 'MoraleBundle\\Controller\\MoraleController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_morale_edit;
                }

                return $ret;
            }
            not_morale_edit:

            // morale_delete
            if (preg_match('#^/morale/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'morale_delete')), array (  '_controller' => 'MoraleBundle\\Controller\\MoraleController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_morale_delete;
                }

                return $ret;
            }
            not_morale_delete:

        }

        // path_home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_home',);
        }

        if (0 === strpos($pathinfo, '/physique')) {
            // path_compte_physique
            if ('/physique' === $pathinfo) {
                return array (  '_controller' => 'PhysiqueBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_compte_physique',);
            }

            // physique_index
            if ('/physique/index' === $pathinfo) {
                $ret = array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::indexAction',  '_route' => 'physique_index',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_physique_index;
                }

                return $ret;
            }
            not_physique_index:

            // physique_new
            if (0 === strpos($pathinfo, '/physique/new') && preg_match('#^/physique/new/(?P<type>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_new')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::newAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_physique_new;
                }

                return $ret;
            }
            not_physique_new:

            // physique_show
            if (preg_match('#^/physique/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_show')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::showAction',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_physique_show;
                }

                return $ret;
            }
            not_physique_show:

            // physique_edit
            if (preg_match('#^/physique/(?P<id>[^/]++)/edit/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_edit')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::editAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_physique_edit;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'physique_edit'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_physique_edit;
                }

                return $ret;
            }
            not_physique_edit:

            // physique_delete
            if (preg_match('#^/physique/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_delete')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::deleteAction',));
                if (!in_array($requestMethod, array('DELETE'))) {
                    $allow = array_merge($allow, array('DELETE'));
                    goto not_physique_delete;
                }

                return $ret;
            }
            not_physique_delete:

        }

        // path_choix
        if ('/site' === $pathinfo) {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_choix',);
        }

        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
