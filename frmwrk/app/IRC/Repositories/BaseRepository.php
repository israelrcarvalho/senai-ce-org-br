<?php
/**
 * Created by PhpStorm.
 * User: ircarvalho
 * Date: 28/10/2016
 * Time: 15:52
 */

namespace App\IRC\Repositories;

use Illuminate\Database\Eloquent\Builder as EloquentQueryBuilder;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Database\Query\Builder as QueryBuilder;

//use Illuminate\Pagination\AbstractPaginator as Paginator;


abstract class BaseRepository
{
    /**
     * Model class para repositorios.
     * @var string
     */
    protected $modelClass;

    /**
     * @return EloquentQueryBuilder|QueryBuilder
     */
    protected function newQuery()
    {
        // return $this->modelClass::query();
        return app($this->modelClass)->newQuery();
    }

    /**
     * @param EloquentQueryBuilder|QueryBuilder $query
     * @param int $take
     * @param bool $paginate
     *
     * @return EloquentCollection | Paginator
     */
    protected function doQuery($query = null, $take = 15, $paginate = true)
    {
        if (is_null($query)) {
            $query = $this->newQuery();
        }

        if (true == $paginate) {

            return $query->paginate($take);
        }

        if ($take > 0 || false !== $take) {
            $query->take($take);
        }

        return $query->get();
    }

    /**
     * Retorna todos os registros.
     * Se $paginate é true retorna uma instancia de Paginator.
     * @param int $take
     * @param bool $paginate
     *
     * @return EloquentCollection|Paginator
     */
    public function getAll($take = 15, $paginate = true)
    {
        return $this->doQuery(null, $take, $paginate);
    }

    /**
     * @param string $column
     * @param string|null $key
     *
     * @return \Illuminate\Support\Collection
     */
    public function lists($column, $key = null)
    {
        return $this->newQuery()->orderBy($column)->pluck($column, $key);
    }

    /**
     * Recupera um registro por seu ID
     *      * Se $fail for true  lança uma exceção se o modelo não for encontrado. https://laravel.com/docs/5.3/eloquent
     *      * Se $fail for false  retorna null
     * @param int $id
     * @param bool $fail
     * @return Model
     */
    public function findByID($id, $fail = true)
    {
        if ($fail) {
            return $this->newQuery()->findOrFail($id);
        }
        return $this->newQuery()->find($id);
    }


    public function store($request)
    {

        try {

            return $this->getModel()->create($request);

        } catch (Exception $e) {

            echo $e->getMessage();

        }
    }


    protected function getModel()
    {

        if ($this->modelClass === null) {
            $this->modelClass = new $this->model;
        }

        return $this->modelClass;
    }

}