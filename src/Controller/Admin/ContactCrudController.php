<?php

namespace App\Controller\Admin;

use Fields\IdField;
use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Fields;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ContactCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Contact::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle(Crud::PAGE_INDEX, 'Reservation Hotels')
            ->setEntityLabelInSingular('Reservation Hotel')
            ->setEntityLabelInPlural('Reservation Hotels');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            // Configure your fields here
            FormField::addPanel('id')->onlyOnIndex(),
            FormField::addPanel('name')->setLabel('Hotel Name'),
            FormField::addPanel('description')->setLabel('Description'),
            // Add other fields here
        ];
    }
}
