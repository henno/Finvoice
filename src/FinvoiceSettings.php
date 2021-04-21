<?php namespace henno\Finvoice;

class FinvoiceSettings
{
    public $from;
    public $to;
    public $invoice;
    public $delivery;

    public function __construct(array $options)
    {
        foreach ($options as $option => $value) {
            $this->$option = (object)$value;
        }
    }
}
