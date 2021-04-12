<?php

namespace App\Services\Contracts;

interface SkillInterface
{
    /**
     * Get all fields
     *
     * @param array $select
     * @return array
     */
    public function getAllFields(array $select = ['*']);

    /**
     * Store/update data
     *
     * @param array $data
     * @return array
     */
    public function store(array $data);

    /**
     * Fetch skill by id
     *
     * @param int $id
     * @param array $select
     * @return array
     */
    public function getById(int $id, array $select = ['*']);

    /**
     * Get all fields with paginate
     *
     * @param array $data
     * @param array $select
     * @return array
     */
    public function getAllFieldsWithPaginate(array $data, array $select = ['*']);

    /**
     * Delete skill by id array
     *
     * @param array $ids
     * @return array
     */
    public function deleteByIds(array $ids);
}