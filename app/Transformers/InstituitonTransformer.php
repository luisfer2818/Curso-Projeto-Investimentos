<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Instituiton;

/**
 * Class InstituitonTransformer.
 *
 * @package namespace App\Transformers;
 */
class InstituitonTransformer extends TransformerAbstract
{
    /**
     * Transform the Instituiton entity.
     *
     * @param \App\Entities\Instituiton $model
     *
     * @return array
     */
    public function transform(Instituiton $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
