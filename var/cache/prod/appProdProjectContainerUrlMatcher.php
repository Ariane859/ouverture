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

        // piece_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'PieceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'piece_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_piece_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'piece_default_index'));
            }

            return $ret;
        }
        not_piece_default_index:

        if (0 === strpos($pathinfo, '/piece')) {
            // piece_index
            if ('/piece/index_piece' === $pathinfo) {
                $ret = array (  '_controller' => 'PieceBundle\\Controller\\PieceController::indexAction',  '_route' => 'piece_index',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_piece_index;
                }

                return $ret;
            }
            not_piece_index:

            // piece_new
            if ('/piece/new/piece' === $pathinfo) {
                $ret = array (  '_controller' => 'PieceBundle\\Controller\\PieceController::newAction',  '_route' => 'piece_new',);
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_piece_new;
                }

                return $ret;
            }
            not_piece_new:

            // piece_show
            if ('/piece/viewPiece' === $pathinfo) {
                $ret = array (  '_controller' => 'PieceBundle\\Controller\\PieceController::showAction',  '_route' => 'piece_show',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_piece_show;
                }

                return $ret;
            }
            not_piece_show:

            // piece_edit
            if (preg_match('#^/piece/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'piece_edit')), array (  '_controller' => 'PieceBundle\\Controller\\PieceController::editAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_piece_edit;
                }

                return $ret;
            }
            not_piece_edit:

            // piece_delete
            if (preg_match('#^/piece/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'piece_delete')), array (  '_controller' => 'PieceBundle\\Controller\\PieceController::deleteAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_piece_delete;
                }

                return $ret;
            }
            not_piece_delete:

        }

        elseif (0 === strpos($pathinfo, '/physique')) {
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

            // physique_recuperation
            if ('/physique/recuperation' === $pathinfo) {
                $ret = array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::Recuperation',  '_route' => 'physique_recuperation',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_physique_recuperation;
                }

                return $ret;
            }
            not_physique_recuperation:

            // physique_new
            if (0 === strpos($pathinfo, '/physique/new') && preg_match('#^/physique/new/(?P<slug>[^/]++)$#sD', $pathinfo, $matches)) {
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

            // physique_showMessage
            if (0 === strpos($pathinfo, '/physiquenotifications') && preg_match('#^/physiquenotifications/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_showMessage')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::showMessage',));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_physique_showMessage;
                }

                return $ret;
            }
            not_physique_showMessage:

            // physique_edit
            if (preg_match('#^/physique/(?P<slug>[^/]++)/(?P<id>[^/]++)/edit/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_edit')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::editAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_physique_edit;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'physique_edit'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_physique_edit;
                }

                return $ret;
            }
            not_physique_edit:

            // physique_delete
            if (preg_match('#^/physique/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'physique_delete')), array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::deleteAction',));
                if (!in_array($canonicalMethod, array('GET', 'POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'DELETE'));
                    goto not_physique_delete;
                }

                return $ret;
            }
            not_physique_delete:

            // physique_search
            if ('/physique/physique/search' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'PhysiqueBundle\\Controller\\PhysiqueController::physiquesearchAction',  '_route' => 'physique_search',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_physique_search;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'physique_search'));
                }

                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_physique_search;
                }

                return $ret;
            }
            not_physique_search:

        }

        // path_home
        if ('/home' === $pathinfo) {
            return array (  '_controller' => 'HomeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_home',);
        }

        // path_choix
        if ('/site' === $pathinfo) {
            return array (  '_controller' => 'SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'path_choix',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
            if (!in_array($canonicalMethod, array('GET'))) {
                $allow = array_merge($allow, array('GET'));
                goto not_fos_js_routing_js;
            }

            return $ret;
        }
        not_fos_js_routing_js:

        if ('/' === $pathinfo) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
