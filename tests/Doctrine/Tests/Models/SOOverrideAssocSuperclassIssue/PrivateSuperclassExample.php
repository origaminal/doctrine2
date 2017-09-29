<?php

namespace Doctrine\Tests\Models\SOOverrideAssocSuperclassIssue;

/**
 * @MappedSuperclass
 * @AssociationOverrides({
 *     @AssociationOverride(
 *           name="targetEntity",
 *           joinColumns=@JoinColumn(
 *              name="superclass_target_entity_id"
 *          )
 *     )
 * })
 */
class PrivateSuperclassExample
{
    use PrivateTraitExample;
}