<?php
Class Humans
{
Public $name = "Johnson Didinya";

private $age = 26;

protected $company = "Cytonn investments";

Public function setName($newName = "cytonn")
{
$this->name = $newName;
}

Public function getName()
{
return $this->name;
}
}