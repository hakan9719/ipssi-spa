<?php

namespace App\Controller;

use App\Entity\Donations;
use App\Manager\DonationsManager;

class DonationsController {

    public function __construct()
    {
        $this->manager = new DonationsManager;
    }

    public function home()
    {
        $donations = $this->manager->getList();
        include ROOT."/templates/Donations/listDonations.php";
    }

    public function addDonation(/* $data */)
        {
            if (!empty($_POST)) {
                $donation = new Donations();
                $donation->hydrate($_POST);
                $this->manager->create($donation);
                header("Location:/spa/public/?page=donations");
            }
            include ROOT."/templates/homeView.php";
        }
}