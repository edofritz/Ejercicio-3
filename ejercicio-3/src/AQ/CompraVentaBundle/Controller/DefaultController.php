<?php

namespace AQ\CompraVentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AQ\CompraVentaBundle\Entity\Vehiculo;

class DefaultController extends Controller
{

	private $linkRepo = "http://crackfc.cl/autos.txt";

    public function indexAction()
    {


    	$path = $this->get('kernel')->getRootDir().'/../web/bundles/autos.json';
    	
		$file = file_get_contents($path);
    	$autos = json_decode($file);
        $autos = $autos->Autos;
        return $this->render('AQCompraVentaBundle:Default:index.html.twig',array(
        	"autos" => $autos
			)
        );
    }
    
    /**
     * @Template()
     */
    public function showAction($id){

    	$file = file_get_contents($this->linkRepo);
    	$autos = json_decode($file);
    	$autos = $autos->Autos;

    	$vehiculo = new Vehiculo();

    	foreach ($autos as $auto) {
    		if ($auto->Id == $id) {
    			$vehiculo->setNombre($auto->Modelo);
    			$vehiculo->setMarca($auto->Marca);
    			$vehiculo->setValor($auto->Valor);
    			break;
    		}
    	}

    	return $this->render('AQCompraVentaBundle:Default:show.html.twig',array(
			"vehiculo" => $vehiculo
			)
        );
        
    }
}
