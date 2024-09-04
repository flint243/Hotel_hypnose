<?php

namespace App\Controller\Admin;

use App\Entity\ReservationHotel;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Fields;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;

class ReservationHotelCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReservationHotel::class;
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
            Fields\IdField::new('id')->onlyOnIndex(),
            Fields\TextField::new('name')->setLabel('Hotel Name'),
            Fields\TextEditorField::new('description')->setLabel('Description'),
            // Add other fields here
        ];
    }
}
