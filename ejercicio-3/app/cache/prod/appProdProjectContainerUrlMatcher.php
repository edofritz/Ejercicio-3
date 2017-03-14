<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/autos')) {
            // aq_compra_venta_homepage
            if (rtrim($pathinfo, '/') === '/autos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'aq_compra_venta_homepage');
                }

                return array (  '_controller' => 'AQ\\CompraVentaBundle\\Controller\\DefaultController::indexAction',  '_route' => 'aq_compra_venta_homepage',);
            }

            // aq_compra_venta_create
            if ($pathinfo === '/autos/create') {
                return array (  '_controller' => 'AQ\\CompraVentaBundle\\Controller\\DefaultController::createAction',  '_route' => 'aq_compra_venta_create',);
            }

            // aq_compra_venta_show
            if (preg_match('#^/autos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aq_compra_venta_show')), array (  '_controller' => 'AQ\\CompraVentaBundle\\Controller\\DefaultController::showAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
