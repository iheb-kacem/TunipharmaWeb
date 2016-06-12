<?php

namespace TuniPharma\MainBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PharmacieAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('adresse')
            ->add('codepostal')
            ->add('type')
            ->add('etat')
            ->add('numtel')
            ->add('email')
            ->add('log')
            ->add('lat')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('adresse')
            ->add('type')
            ->add('etat')
            ->add('numtel')
            ->add('email')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('nom')
            ->add('adresse')
            ->add('codepostal')
            ->add('type', 'choice', array('choices'=>array('Pharmacie de Jour'=>'Pharmacie de Jour', 'Pharmacie de Nuit '=>'Pharmacie de Nuit ')))
            ->add('etat', 'choice', array('choices'=>array('demande'=>'Demande En Cours', 'active'=>'Active')))
            ->add('numtel')
            ->add('email')
            ->add('log')
            ->add('lat')
            ->add('idService')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('nom')
            ->add('adresse')
            ->add('codepostal')
            ->add('type')
            ->add('etat')
            ->add('numtel')
            ->add('email')
            ->add('log')
            ->add('lat')
            ->add('dateInscription')
        ;
    }
}
