<?php
namespace MyApp\Models;

use MyApp\Models\TaskResourceModel;

class TaskRepository
{
    /**
     * @param $model
     * Add one object model
     */
    public function add($model){
        $taskResourceModel = new TaskResourceModel('tasks', 'id', $model);
        if ($taskResourceModel->save($model)){
            return true;
        }
        return false;
    }

    /**
     * @param $model
     * Edit one object model
     */
    public function edit($model){
        $taskResourceModel = new TaskResourceModel('tasks', 'id', $model);
        if ($taskResourceModel->save($model)){
            return true;
        }
        return false;
    }

    /**
     * @param $model
     * Delete one object model
     */
    public function delete($id){
        $taskResourceModel = new TaskResourceModel('tasks', 'id', '');
        if ($taskResourceModel->delete($id)){
            return true;
        }
        return false;
    }

    /**
     * @param $id
     * get one object model
     * @Return object
     */
    public function getElementById($id)
    {
        $taskResourceModel = new TaskResourceModel('tasks', 'id', '');
        return ($taskResourceModel->showTask($id));
    }

    /**
     * @Return array[obj, obj,..]
     */
    public function getAll()
    {
        $taskResourceModel = new TaskResourceModel('tasks', '', '');
        return $taskResourceModel->showAllTasks();
    }

}