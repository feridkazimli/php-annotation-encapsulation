<?php
use Repositories\Requests\TroyaRepo;

require './Autoloader.php';

Autoloader::Register();

$troya = Repositories\EntityRequestRepo::RepoClass(new TroyaRepo());
print_r($troya->getAge());
$this->post();
