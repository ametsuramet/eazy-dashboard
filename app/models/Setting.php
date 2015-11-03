<?php

class Setting extends \Phalcon\Mvc\Model
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
    protected $url;

    /**
     *
     * @var integer
     */
    protected $level;

    /**
     *
     * @var integer
     */
    protected $id_reg;

    /**
     *
     * @var string
     */
    protected $option;

    /**
     *
     * @var string
     */
    protected $frontend;

    /**
     *
     * @var string
     */
    protected $template;

    /**
     *
     * @var string
     */
    protected $layout;

    /**
     *
     * @var string
     */
    protected $free_member;

    /**
     *
     * @var string
     */
    protected $menu;

    /**
     *
     * @var string
     */
    protected $description;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var string
     */
    protected $api_key;

    /**
     *
     * @var string
     */
    protected $valid;

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
     * Method to set the value of field url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Method to set the value of field level
     *
     * @param integer $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;

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
     * Method to set the value of field frontend
     *
     * @param string $frontend
     * @return $this
     */
    public function setFrontend($frontend)
    {
        $this->frontend = $frontend;

        return $this;
    }

    /**
     * Method to set the value of field template
     *
     * @param string $template
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Method to set the value of field layout
     *
     * @param string $layout
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Method to set the value of field free_member
     *
     * @param string $free_member
     * @return $this
     */
    public function setFreeMember($free_member)
    {
        $this->free_member = $free_member;

        return $this;
    }

    /**
     * Method to set the value of field menu
     *
     * @param string $menu
     * @return $this
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;

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
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Method to set the value of field api_key
     *
     * @param string $api_key
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;

        return $this;
    }

    /**
     * Method to set the value of field valid
     *
     * @param string $valid
     * @return $this
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

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
     * Returns the value of field url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the value of field level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
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
     * Returns the value of field option
     *
     * @return string
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * Returns the value of field frontend
     *
     * @return string
     */
    public function getFrontend()
    {
        return $this->frontend;
    }

    /**
     * Returns the value of field template
     *
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Returns the value of field layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Returns the value of field free_member
     *
     * @return string
     */
    public function getFreeMember()
    {
        return $this->free_member;
    }

    /**
     * Returns the value of field menu
     *
     * @return string
     */
    public function getMenu()
    {
        return $this->menu;
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
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Returns the value of field api_key
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * Returns the value of field valid
     *
     * @return string
     */
    public function getValid()
    {
        return $this->valid;
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
        return 'setting';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Setting[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Setting
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
            'url' => 'url',
            'level' => 'level',
            'id_reg' => 'id_reg',
            'option' => 'option',
            'frontend' => 'frontend',
            'template' => 'template',
            'layout' => 'layout',
            'free_member' => 'free_member',
            'menu' => 'menu',
            'description' => 'description',
            'status' => 'status',
            'api_key' => 'api_key',
            'valid' => 'valid',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at'
        );
    }

}
