<?php

class PostMeta extends \Phalcon\Mvc\Model
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
    protected $type;

    /**
     *
     * @var integer
     */
    protected $option1;

    /**
     *
     * @var integer
     */
    protected $option2;

    /**
     *
     * @var string
     */
    protected $option3;

    /**
     *
     * @var string
     */
    protected $option4;

    /**
     *
     * @var double
     */
    protected $option5;

    /**
     *
     * @var string
     */
    protected $option6;

    /**
     *
     * @var string
     */
    protected $option7;

    /**
     *
     * @var string
     */
    protected $option8;

    /**
     *
     * @var string
     */
    protected $option9;

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
     * Method to set the value of field option1
     *
     * @param integer $option1
     * @return $this
     */
    public function setOption1($option1)
    {
        $this->option1 = $option1;

        return $this;
    }

    /**
     * Method to set the value of field option2
     *
     * @param integer $option2
     * @return $this
     */
    public function setOption2($option2)
    {
        $this->option2 = $option2;

        return $this;
    }

    /**
     * Method to set the value of field option3
     *
     * @param string $option3
     * @return $this
     */
    public function setOption3($option3)
    {
        $this->option3 = $option3;

        return $this;
    }

    /**
     * Method to set the value of field option4
     *
     * @param string $option4
     * @return $this
     */
    public function setOption4($option4)
    {
        $this->option4 = $option4;

        return $this;
    }

    /**
     * Method to set the value of field option5
     *
     * @param double $option5
     * @return $this
     */
    public function setOption5($option5)
    {
        $this->option5 = $option5;

        return $this;
    }

    /**
     * Method to set the value of field option6
     *
     * @param string $option6
     * @return $this
     */
    public function setOption6($option6)
    {
        $this->option6 = $option6;

        return $this;
    }

    /**
     * Method to set the value of field option7
     *
     * @param string $option7
     * @return $this
     */
    public function setOption7($option7)
    {
        $this->option7 = $option7;

        return $this;
    }

    /**
     * Method to set the value of field option8
     *
     * @param string $option8
     * @return $this
     */
    public function setOption8($option8)
    {
        $this->option8 = $option8;

        return $this;
    }

    /**
     * Method to set the value of field option9
     *
     * @param string $option9
     * @return $this
     */
    public function setOption9($option9)
    {
        $this->option9 = $option9;

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
     * Returns the value of field type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Returns the value of field option1
     *
     * @return integer
     */
    public function getOption1()
    {
        return $this->option1;
    }

    /**
     * Returns the value of field option2
     *
     * @return integer
     */
    public function getOption2()
    {
        return $this->option2;
    }

    /**
     * Returns the value of field option3
     *
     * @return string
     */
    public function getOption3()
    {
        return $this->option3;
    }

    /**
     * Returns the value of field option4
     *
     * @return string
     */
    public function getOption4()
    {
        return $this->option4;
    }

    /**
     * Returns the value of field option5
     *
     * @return double
     */
    public function getOption5()
    {
        return $this->option5;
    }

    /**
     * Returns the value of field option6
     *
     * @return string
     */
    public function getOption6()
    {
        return $this->option6;
    }

    /**
     * Returns the value of field option7
     *
     * @return string
     */
    public function getOption7()
    {
        return $this->option7;
    }

    /**
     * Returns the value of field option8
     *
     * @return string
     */
    public function getOption8()
    {
        return $this->option8;
    }

    /**
     * Returns the value of field option9
     *
     * @return string
     */
    public function getOption9()
    {
        return $this->option9;
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
        return 'post_meta';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PostMeta[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PostMeta
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
            'type' => 'type',
            'option1' => 'option1',
            'option2' => 'option2',
            'option3' => 'option3',
            'option4' => 'option4',
            'option5' => 'option5',
            'option6' => 'option6',
            'option7' => 'option7',
            'option8' => 'option8',
            'option9' => 'option9',
            'id_ref' => 'id_ref',
            'id_reg' => 'id_reg',
            'id_web' => 'id_web',
            'id_user' => 'id_user',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at'
        );
    }

}
