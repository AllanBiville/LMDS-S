<?php

namespace App\Controller\Admin;

use App\Entity\FontAwesome;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class FontAwesomeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return FontAwesome::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
