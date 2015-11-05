<?php

class Post extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    protected $id;

    /**
     *
     * @var string
     */
    protected $title;

    /**
     *
     * @var string
     */
    protected $type;

    /**
     *
     * @var integer
     */
    protected $category;

    /**
     *
     * @var string
     */
    protected $option;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var string
     */
    protected $slug;

    /**
     *
     * @var string
     */
    protected $flag;

    /**
     *
     * @var integer
     */
    protected $hit;

    /**
     *
     * @var integer
     */
    protected $id_ref;

    /**
     *
     * @var integer
     */
    protected $id_reg;

    /**
     *
     * @var integer
     */
    protected $id_web;

    /**
     *
     * @var integer
     */
    protected $id_user;

    /**
     *
     * @var string
     */
    protected $published_at;

    /**
     *
     * @var string
     */
    protected $created_at;

    /**
     *
     * @var string
     */
    protected $updated_at;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Method to set the value of field type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Method to set the value of field category
     *
     * @param integer $category
     * @return $this
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Method to set the value of field option
     *
     * @param string $option
     * @return $this
     */
    public function setOption($option)
    {
        $this->option = $option;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Method to set the value of field slug
     *
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Method to set the value of field flag
     *
     * @param string $flag
     * @return $this
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Method to set the value of field hit
     *
     * @param integer $hit
     * @return $this
     */
    public function setHit($hit)
    {
        $this->hit = $hit;

        return $this;
    }

    /**
     * Method to set the value of field id_ref
     *
     * @param integer $id_ref
     * @return $this
     */
    public function setIdRef($id_ref)
    {
        $this->id_ref = $id_ref;

        return $this;
    }

    /**
     * Method to set the value of field id_reg
     *
     * @param integer $id_reg
     * @return $this
     */
    public function setIdReg($id_reg)
    {
        $this->id_reg = $id_reg;

        return $this;
    }

    /**
     * Method to set the value of field id_web
     *
     * @param integer $id_web
     * @return $this
     */
    public function setIdWeb($id_web)
    {
        $this->id_web = $id_web;

        return $this;
    }

    /**
     * Method to set the value of field id_user
     *
     * @param integer $id_user
     * @return $this
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Method to set the value of field published_at
     *
     * @param string $published_at
     * @return $this
     */
    public function setPublishedAt($published_at)
    {
        $this->published_at = $published_at;

        return $this;
    }

    /**
     * Method to set the value of field created_at
     *
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Method to set the value of field updated_at
     *
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field category
     *
     * @return integer
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Returns the value of field option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the value of field slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Returns the value of field flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Returns the value of field hit
     *
     * @return integer
     */
    public function getHit()
    {
        return $this->hit;
    }

    /**
     * Returns the value of field id_ref
     *
     * @return integer
     */
    public function getIdRef()
    {
        return $this->id_ref;
    }

    /**
     * Returns the value of field id_reg
     *
     * @return integer
     */
    public function getIdReg()
    {
        return $this->id_reg;
    }

    /**
     * Returns the value of field id_web
     *
     * @return integer
     */
    public function getIdWeb()
    {
        return $this->id_web;
    }

    /**
     * Returns the value of field id_user
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Returns the value of field published_at
     *
     * @return string
     */
    public function getPublishedAt()
    {
        return $this->published_at;
    }

    /**
     * Returns the value of field created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Returns the value of field updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'post';
    }
    public function initialize() {
        $this->belongsTo("category", "PostCategory", "id");
    }
     public function afterFetch()
    {
        // Convert the string to an array
        $this->option = json_decode($this->option);
        $this->PostCategory = $this->PostCategory;
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Post[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Post
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }
  
   

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return array(
            'id' => 'id',
            'title' => 'title',
            'type' => 'type',
            'category' => 'category',
            'option' => 'option',
            'description' => 'description',
            'slug' => 'slug',
            'flag' => 'flag',
            'hit' => 'hit',
            'id_ref' => 'id_ref',
            'id_reg' => 'id_reg',
            'id_web' => 'id_web',
            'id_user' => 'id_user',
            'published_at' => 'published_at',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at'
        );
    }

}
