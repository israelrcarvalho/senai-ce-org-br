<?php

namespace App\IRC\Models;

use Illuminate\Database\Eloquent\Model;
use IRCScheduledRoom\IRC\Presenters\PeriodoPresenter;
use Laracasts\Presenter\PresentableTrait;

class PeriodoEvento extends Model
{
    use PresentableTrait;

    protected $table = 'evento_periodo';
    public $timestamps = false;
    public $modelName = 'PeriodoEvento';
    protected $presenter = PeriodoPresenter::class;

    /**
     * Retorna o evento deste Periodo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function evento()
    {
        return $this->belongsTo(Evento::class, 'evento_id');
    }

    /**
     * Retorna o espaço utilizado no periodo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function espaco()
    {
        return $this->belongsTo(Espaco::class, 'espaco_id');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nivel()
    {
        return $this->belongsTo(Nivel::class, 'nivel_id');
    }
    /**
     * Retorna o status deste periodo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getStatus()
    {
        return $this->belongsTo(Status::class, 'status');
    }


    /**
     * Retorna todos os recursos deste periodo ou desta data
     * O Model PeriodoRecurso está mapeado com  a table periodo_recurso
     * O campo de ligação é periodo_id
     * @return mixed
     */
    public function recursosUtilizados()
    {
        return $this->belongsToMany(Orcamento::class, 'periodo_recurso','periodo_id')->withPivot('preco','quantidade');
    }

}
