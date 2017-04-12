<?php

namespace Alashow\BelongsToManyThrough;

trait BelongsToManyThroughRelationship
{
    public function belongsToManyThrough($related, $through, $firstKey = null, $secondKey = null)
    {
        $through = new $through;
        $related = new $related;

        $firstKey = $firstKey ?: $this->getForeignKey();
        $secondKey = $secondKey ?: $related->getForeignKey();

        return new BelongsToManyThrough($related->newQuery(), $this, $through, $firstKey, $secondKey);
    }
}