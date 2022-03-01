<?php


interface Laptop
{
    /**
     * @return string
     */
    public function info(): string;

    /**
     * @param $type
     * @return string
     */
    public function __getSerialNumber($type): string;
}


class LaptopCreating implements Laptop
{
    /**
     * @var string
     */
    protected string $serialNumber;

    /**
     * @param $type
     */
    public function __construct($type)
    {
        $this->serialNumber = $type;
    }

    /**
     * @param $type
     * @return string
     */
    public function __getSerialNumber($type): string
    {
        return $this->serialNumber;
    }

    /**
     * @return string
     */
    public function info(): string
    {
        return "new serial number created:" . $this->serialNumber;
    }

}



class CarFactory
{
    /**
     * @param $type
     * @return Laptop
     */
    public static function makeCar($type): Laptop
    {
        if ($type == "") {
            throw new Exception('Laptop not found.');

        } else {
            return new LaptopCreating($type);
        }
    }
}

$laptop1 = CarFactory::makeCar('23059eedwf9f0e');
echo $laptop1->info();

