<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use League\Fractal\TransformerAbstract;
<?php if(!$no_entity): ?>use <?= $entity_full_class_name. ";\n"?><?php endif ?>
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class <?= $class_name ?> extends TransformerAbstract
{
    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected $availableIncludes = [];

    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [];

    public function transform(<?php if(!$no_entity):?><?= $entity_class_name ?> $entity<?php else:?>$entity<?php endif ?>): array
    {
        return []; 
    }
}