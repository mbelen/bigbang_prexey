<?php

namespace Backend\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Backend\AdminBundle\Entity\Producto;
use Backend\AdminBundle\Form\ProductoType;

/**
 * Producto controller.
 *
 */
class ProductoController extends Controller
{

     public function generateSQL($search){
     
        $dql="SELECT u FROM BackendAdminBundle:Producto u "  ;
        
        $where=" where u.isDelete=false ";
        
        if ( $this->get('security.context')->isGranted($this->container->getParameter('role_centro'))){
           $dql.=" JOIN u.sucursal s JOIN s.centro c"    ;
           $where.=" and c.id = ".$this->getUser()->getCentro()->getId();
        }
        
        if ( $this->get('security.context')->isGranted($this->container->getParameter('role_sucursal'))){
           $dql.=" JOIN u.sucursal s "    ;
           $where.=" and s.id = ".$this->getUser()->getSucursal()->getId();
        }

        
        $search=mb_convert_case($search,MB_CASE_LOWER);
        
       
        if ($search)
          $where.=" and u.imei like '%$search%' ";
          
          
        $dql .=$where." order by u.imei"; 
        
        return $dql;
     
     }

    /**
     * Lists all Sucursal entities.
     *
     */
    public function indexAction(Request $request,$search)
    {
       if ( $this->get('security.context')->isGranted('ROLE_VIEWPRODUCTO')) {
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
        return $this->render('BackendAdminBundle:Producto:index.html.twig', 
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
        if ( $this->get('security.context')->isGranted('ROLE_ADDPRODUCTO')) {
        $entity  = new Producto();
        $form = $this->createForm(new ProductoType($this->get('security.context')), $entity);
        $form->bind($request);
         
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->getFlashBag()->add('success' , 'Se ha agregado un nuevo producto.');
            return $this->redirect($this->generateUrl('producto_edit', array('id' => $entity->getId())));
        }
        
        

        return $this->render('BackendAdminBundle:Producto:new.html.twig', array(
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
    private function createCreateForm(Producto $entity)
    {
        $form = $this->createForm(new ProductoType($this->get('security.context')), $entity, array(
            'action' => $this->generateUrl('producto_create'),
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
       if ( $this->get('security.context')->isGranted('ROLE_ADDPRODUCTO')) {
        $entity = new Producto();
        $form   = $this->createForm(new ProductoType($this->get('security.context')), $entity);

        return $this->render('BackendAdminBundle:Producto:new.html.twig', array(
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
        if ( $this->get('security.context')->isGranted('ROLE_MODPRODUCTO')) { 
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendAdminBundle:Producto')->find($id);

        if (!$entity) {
            
             $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el producto .');
             return $this->redirect($this->generateUrl('producto'));
        }

        $editForm = $this->createForm(new ProductoType($this->get('security.context')), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BackendAdminBundle:Producto:edit.html.twig', array(
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
    private function createEditForm(Producto $entity)
    {
        $form = $this->createForm(new ProductoType($this->get('security.context')), $entity, array(
            'action' => $this->generateUrl('producto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Sucursal entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        if ( $this->get('security.context')->isGranted('ROLE_MODPRODUCTO')) {  
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BackendAdminBundle:Producto')->find($id);

        if (!$entity) {
             $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el producto.');
             return $this->redirect($this->generateUrl('producto'));
        }

       $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProductoType($this->get('security.context')), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
             $this->get('session')->getFlashBag()->add('success' , 'Se han actualizado los datos del producto.');
            return $this->redirect($this->generateUrl('producto_edit', array('id' => $id)));
        }

        return $this->render('BackendAdminBundle:Producto:edit.html.twig', array(
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
        if ( $this->get('security.context')->isGranted('ROLE_DELPRODUCTO')) { 
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BackendAdminBundle:Producto')->find($id);

            if (!$entity) {
                $this->get('session')->getFlashBag()->add('error' , 'No se ha encontrado el producto.');
             
            }
           else{
            
          
            $entity->setIsDelete(true); //baja lógica
            $em->persist($entity);
            $em->flush();
            
           
            
            $this->get('session')->getFlashBag()->add('success' , 'Se han borrado los datos del producto.');
            
            }
        }

        return $this->redirect($this->generateUrl('producto'));
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
    
     public function exportarAction(Request $request)
    {
     if ( $this->get('security.context')->isGranted('ROLE_VIEWPRODUCTO')) {
         
         $em = $this->getDoctrine()->getManager();

       
        $search=$this->generateSQL($request->query->get("search-query")); 
           
       
        $query = $em->createQuery($search);
        
        $excelService = $this->get('xls.service_xls5');
                         
                            
        $excelService->excelObj->setActiveSheetIndex(0)
                    ->setCellValue('A1', 'Sucursal')
                    ->setCellValue('B1', 'Modelo')
                    ->setCellValue('C1', 'Imei')
                    ->setCellValue('D1', 'MSN')
                    ->setCellValue('E1', 'Disponible')
                    ;
        
        $resultados=$query->getResult();
        $i=2;
        foreach($resultados as $r)
        {
         
           $excelService->excelObj->setActiveSheetIndex(0)
                         ->setCellValue("A$i",$r->getSucursal())
                         ->setCellValue("B$i",$r->getModelo())
                         ->setCellValue("C$i",$r->getImei())
                         ->setCellValue("D$i",$r->getMsn())
                         ->setCellValue("E$i",$r->getIsAvailable())
                         ;
                
                           
          $i++;
        }
                            
        $excelService->excelObj->getActiveSheet()->setTitle('Listado de Equipos');
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
        
        $fileName="productos_".date("Ymd").".xls";
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
