<?php

require __DIR__ . '/../../../vendor/autoload.php';

use \TemplateClasses\Tea;
use \TemplateClasses\Coffe;

function info()
{
    try {
        $tea = new Tea();
        $coffee = new Coffe();
        echo 'Making tea...';
        echo '<br>';
        $tea->prepareRecipe();
        echo '<br>';
        echo '<br>';
        echo 'Making tea...';
        echo '<br>';
        $tea->customerWantsCondiments('n');
        echo '<br>';
        $tea->prepareRecipe();
        echo '<br>';
        echo "Making coffee...";
        echo '<br>';
        $coffee->prepareRecipe();
        echo '<br>';
        echo '<br>';
        echo "Making coffee...";
        echo '<br>';
        $coffee->customerWantsCondiments('n');
        echo '<br>';
        $coffee->prepareRecipe();
    } catch (Exception $exception) {
        echo $exception->getMessage();
    }
}

info();