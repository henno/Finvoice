<?php

use henno\Finvoice\Finvoice;
use henno\Finvoice\FinvoiceSettings;

require_once __DIR__ . '/../vendor/autoload.php';

$finvoice = new Finvoice(new FinvoiceSettings([
        'from' => [
            'IBAN' => 'FI2487000710446218',
            'BIC' => 'DABAFIHH',
            'name' => 'Virtue Softworks',
            'business_id' => '2444711-4',
            'address' => 'Minna Canthin katu 4 A 4. krs',
            'postcode' => '70200',
            'city' => 'Kuopio'
        ],
        'to' => [
            'IBAN' => 'FI3387000710510658',
            'BIC' => 'DABAFIHH',
            'name' => 'OmaStore Osuuskunta',
            'business_id' => '2527031-4',
            'address' => 'Minna Canthin katu 4 A 4. krs',
            'postcode' => '70200',
            'city' => 'Kuopio'
        ],
        'invoice' => [
            'id' => 275536,
            'order_id' => 100025,
            'date' => '2013-07-02',
            'due_date' => '2013-07-15',
            'reference_number' => 2755366,
            'rows' => [
                (object)[
                    'id' => 1331,
                    'name' => 'Tuntityö',
                    'amount' => 5.5,
                    'unit' => 'h',
                    'price' => 50,
                    'vat' => 24
                ],
                (object)[
                    'id' => 1332,
                    'name' => 'Verkkotunnuksen rekisteröinti',
                    'amount' => 1,
                    'unit' => 'kpl',
                    'price' => 20,
                    'vat' => 24
                ]
            ]
        ]
    ]
), false);

echo $finvoice->getXML();
