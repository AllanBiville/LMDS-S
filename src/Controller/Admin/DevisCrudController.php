<?php

namespace App\Controller\Admin;

use App\Entity\Devis;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DevisCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Devis::class;
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
