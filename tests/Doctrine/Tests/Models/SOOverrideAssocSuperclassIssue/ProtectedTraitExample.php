<?php

namespace Doctrine\Tests\Models\SOOverrideAssocSuperclassIssue;

trait ProtectedTraitExample
{
    /**
     * @ManyToOne(targetEntity="Doctrine\Tests\Models\SOOverrideAssocSuperclassIssue\TargetEntityExample")
     * @JoinColumn(name="target_entity_id")
     */
    protected $targetEntity;
}