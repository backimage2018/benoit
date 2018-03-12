<?php
namespace App\Repository;

use Doctrine\ORM\Mapping\ClassMetaData;
use Doctrine\ORM\Query\Filter\SQLFilter;


class FiltersRepository extends SQLFilter

{
    public function addFilterConstraint(ClassMetadata $targetEntity, $targetTableAlias)
    {
        if ($targetEntity->hasField("deleted")) {
            $date = date("Y-m-d H:i:s");
            return $targetTableAlias.".deleted > '".$date."' OR ".$targetTableAlias.".deleted IS NULL";
        }
        return "";
    }
}

?>