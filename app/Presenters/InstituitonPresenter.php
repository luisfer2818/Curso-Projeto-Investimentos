<?php

namespace App\Presenters;

use App\Transformers\InstituitonTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class InstituitonPresenter.
 *
 * @package namespace App\Presenters;
 */
class InstituitonPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new InstituitonTransformer();
    }
}
