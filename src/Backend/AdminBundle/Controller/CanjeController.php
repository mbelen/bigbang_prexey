<?php

namespace Backend\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Backend\AdminBundle\Entity\Canje;
use Backend\AdminBundle\Form\CanjeType;

/**
 * Canje controller.
 *
 */
class CanjeController extends Controller
{

     public function generateSQL($search){
     
        //$dql="SELECT u FROM BackendAdminBundle:Canje u where u.isDelete=false"  ;
        
        $dql="SELECT c FROM BackendAdminBundle:Canje c 
			  JOIN c.productoNuevo p "  ;
        $where=" where c.isDelete=false ";               
        $search=mb_convert_case($search,MB_CASE_LOWER);
        
         if ( $this->get('security.context')->isGranted($this->container->getParameter('role_centro'))){
           $dql.=" JOIN c.sucursal s JOIN s.centro e "    ;
           $where.=" and e.id = ".$this->getUser()->getCentro()->getId();
        }
        
        if ( $this->get('security.context')->isGranted($this->container->getParameter('role_sucursal'))){
           $dql.=" JOIN c.sucursal s "    ;
           $where.=" and s.id = ".$this->getUser()->getSucursal()->getId();
        }
        
        $dql.=$where;
       /*
        if ($search)
          $dql.=" and u.imei like '%$search%' ";
          
        $dql .=" order by u.imei"; 
        */
        return $dql;
     
     }

    /**
     * Lists all Sucursal entities.
     *
     */
    public function indexAction(Request $request,$search)
    {
       if ( $this->get('security.context')->isGranted('ROLE_VIEWCANJE')) {
        $em = $this->getDoctrine()->getManager();
        
        $dql=$this->generateSQL($search);
        $query = $em->createQuery($dql);
        
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $query,
        $this->get('request')->query->get('page', 1)/*page number*/,
        $this->container->getParameter('max_on_listepage')/*limit per page*/
    );
        
        $deleteForm = $this->createDeleteForm(0);
        return $this->render('BackendAdminBundle:Canje:index.html.twig', 
        array('pagination' => $pagination,
        'delete_form' => $deleteForm->createView(),
        'search'=>$search
        ));
        
    }
     else
         throw new AccessDeniedException(); 
    }
    /**
     * Creates a new Producto entity.
     *
     */
    public function createAction(Request $request)
    {
        if ( $this->get('security.context')->isGranted('ROLE_ADDCANJE')) {
        $entity  = new Canje();
        $form = $this->createForm(new CanjeType($this->get('security.context')), $entity);
        $form->bind($request);
         
        if ($form->isValid()) {
			
            $em = $this->getDoctrine()->getManager();
            $productoNuevo = $em->getRepository('BackendAdminBundle:Producto')->findOneByImei($entity->getImeiNuevo());
            
            $productoNuevo->setIsAvailable(false);
            $em->persist($productoNuevo);
                   
            $entity->setProductoNuevo($productoNuevo);
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success' , 'Se ha agregado un nuevo canje.');
            return $this->redirect($this->generateUrl('canje', array('id' => $entity->getId())));
        }
        
        

        return $this->render('BackendAdminBundle:Canje:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
           
        ));
      }
      else
       throw new AccessDeniedException();
    }

    /**
    * Creates a form to create a Sucursal entity.
    *
    * @param Producto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Canje $entity)
    {
        $form = $this->createForm(new CanjeType($this->get('security.context')), $entity, array(
            'action' => $this->generateUrl('canje_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Sucursal entity.
     *
     */
    public function newAction()
    {
       if ( $this->get('security.context')->isGranted('ROLE_ADDCANJE')) {
        $entity = new Canje();
        $form   = $this->createForm(new CanjeType($this->get('security.context')), $entity);

        return $this->render('BackendAdminBundle:Canje:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView()
            
        ));
       }
       else
          throw new AccessDeniedException();
    }

  
    /**
     * Displays a form to edit an existing Sucursal entity.
     *
     */
    public function editAction($id)
    {
        if ( $this->get('security.context')->isGranted('ROLE_MODCANJE')) { 
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendAdminBundle:Canje')->find($id);

        if (!$entity) {
            
             $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el canje .');
             return $this->redirect($this->generateUrl('canje'));
        }

        $editForm = $this->createForm(new CanjeType($this->get('security.context')), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendAdminBundle:Canje:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            
        ));
      }
      else
         throw new AccessDeniedException(); 
    }

    /**
    * Creates a form to edit a Sucursal entity.
    *
    * @param Producto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Canje $entity)
    {
        $form = $this->createForm(new CanjeType($this->get('security.context')), $entity, array(
            'action' => $this->generateUrl('canje_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Canje entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        if ( $this->get('security.context')->isGranted('ROLE_MODCANJE')) {  
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendAdminBundle:Canje')->find($id);

        if (!$entity) {
             $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el canje.');
             return $this->redirect($this->generateUrl('canje'));
        }

       $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CanjeType($this->get('security.context')), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
             $this->get('session')->getFlashBag()->add('success' , 'Se han actualizado los datos del canje.');
            return $this->redirect($this->generateUrl('canje_edit', array('id' => $id)));
        }

        return $this->render('BackendAdminBundle:Canje:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            
        ));
      }
      else
         throw new AccessDeniedException();  
    }
    /**
     * Deletes a Producto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        if ( $this->get('security.context')->isGranted('ROLE_DELCANJE')) { 
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackendAdminBundle:Canje')->find($id);                       

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el canje.');
             
            }
           else{
			   
			$productoNuevo = $em->getRepository('BackendAdminBundle:Producto')->findOneByImei($entity->getImeiNuevo());
            
            $productoNuevo->setIsAvailable(true);
            $em->persist($productoNuevo);            
          
            $entity->setIsDelete(true); //baja lógica
            $em->persist($entity);
            $em->flush();
            
           
            
            $this->get('session')->getFlashBag()->add('success' , 'Se han borrado los datos del canje.');
            
            }
        }

        return $this->redirect($this->generateUrl('canje'));
      }
      else
       throw new AccessDeniedException(); 
    }

    /**
     * Creates a form to delete a Sucursal entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    public function toProcesadoAction(Request $request){
			
			$imeiNuevo = explode(",",$request->query->get("imeiNuevo"));
			$em = $this->getDoctrine()->getManager();
			$producto = $em->getRepository('BackendAdminBundle:Producto')->findOneByImei($imeiNuevo);
			if(!$producto){
				$data["modelo"]= false;
			}else{
				if($producto->getisAvailable() == true){
					$modelo = $producto->getModelo()->getName();
					$data["modelo"]= $modelo;
					$id = $producto->getId();
					$data["id"]=$id;
				}else{
				 
				  $data["disponible"] = false;				
				}	
			}
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			
			return $response;
	}
    
     public function exportarAction(Request $request)
    {
     if ( $this->get('security.context')->isGranted('ROLE_VIEWCANJE')) {
         
         $em = $this->getDoctrine()->getManager();

       
        $search=$this->generateSQL($request->query->get("search-query")); 
           
       
        $query = $em->createQuery($search);
        
        $excelService = $this->get('xls.service_xls5');
                         
                            
        $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A1','Origen')
                    ->setCellValue('B1', 'Centro')
                    ->setCellValue('C1', 'Sucursal')
                    ->setCellValue('D1','Modelo')
                    ->setCellValue('E1', 'ImeiNuevo')
                    ->setCellValue('F1', 'MSN')
                    ;
        
        $resultados=$query->getResult();
        $i=2;
        foreach($resultados as $r)
        {
         
           $excelService->excelObj->setActiveSheetIndex(0)
                         ->setCellValue("A$i",$r->getProductoNuevo()->getOrigen()->getName())
                         ->setCellValue("B$i",$r->getSucursal()->getCentro()->getNombre())
                         ->setCellValue("C$i",$r->getSucursal()->getNombre())
                         ->setCellValue("D$i",$r->getProductoNuevo()->getModelo()->getNameManufacture())
                         ->setCellValue("E$i",$r->getImeiNuevo())                         
                         ->setCellValue("F$i",$r->getProductoNuevo()->getMsn())
                         ;
                
                           
          $i++;
        }
                     
                            
        $excelService->excelObj->getActiveSheet()->setTitle('Listado de Canjes');
        // Set active sheet index to the first sheet, so Excel opens this as the first sheet
        $excelService->excelObj->setActiveSheetIndex(0);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
        $excelService->excelObj->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
        
        $fileName="canjes_".date("Ymd").".xls";
        //create the response
        $response = $excelService->getResponse();
        $response->headers->set('Content-Type', 'text/vnd.ms-excel; charset=utf-8');
        //$response->headers->set('Content-Disposition', 'filename='.$fileName);
        echo header("Content-Disposition: attachment; filename=$fileName");
        // If you are using a https connection, you have to set those two headers and use sendHeaders() for compatibility with IE <9
        $response->headers->set('Pragma', 'public');
        $response->headers->set('Cache-Control', 'maxage=1');
        $response->sendHeaders();
        return $response; 
        
        
        }
        else{
           throw new AccessDeniedException(); 
        }
   
    
    }
    
    
}
