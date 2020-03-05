<?php

namespace App\Services;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CapitalizerRepository")
 */
class Capitalize implements Transform
{
    public function Transform( string  $string) :string {
        return preg_replace_callback('/\w.?/', function ($m) { return ucfirst($m[0]); }, $string);
    }
}