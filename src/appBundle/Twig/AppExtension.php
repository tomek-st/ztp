<?php 
namespace appBundle\Twig;

class AppExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('separator', array($this, 'separatorFilter')),
        );
    }

    public function separatorFilter($price)
    {
        $price;
        $price = $price.",";

        return $price;
    }
}
?>