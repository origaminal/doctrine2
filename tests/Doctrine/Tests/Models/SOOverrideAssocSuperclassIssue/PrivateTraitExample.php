<?php

namespace Doctrine\Tests\Models\SOOverrideAssocSuperclassIssue;

trait PrivateTraitExample
{
    /**
     * @ManyToOne(targetEntity="Doctrine\Tests\Models\SOOverrideAssocSuperclassIssue\TargetEntityExample")
     * @JoinColumn(name="target_entity_id")
     */
    private $targetEntity;
}