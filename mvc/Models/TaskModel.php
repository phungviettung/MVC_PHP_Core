<?php
namespace MyApp\Models;

use MyApp\Core\Model;

class TaskModel extends Model
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $title
     *
     * @Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string $description
     *
     * @Column(name="description", type="string", length=50, nullable=false)
     */
    private $description;

    private $created_at;

    private $updated_at;

    /**
     * Set
     *
     * @param interger id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     * @return string $title
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     * @return string $description
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * Set created_at
     *
     * @param string $created_at
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * Get created_at
     * @return string $created_at
     */
    public function getCreated_at(){
        return $this->created_at;
    }

    /**
     * Set updated_at
     *
     * @param string $updated_at
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;
    }

    /**
     * Get updated_at
     * @return string $updated_at
     */
    public function getUpdated_at(){
        return $this->updated_at;
    }

    public function getProperties($model){
        return get_object_vars($this);
    }

}
