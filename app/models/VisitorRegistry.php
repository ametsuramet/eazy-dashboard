<?php

class VisitorRegistry extends \Phalcon\Mvc\Model
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
    protected $ip;

    /**
     *
     * @var string
     */
    protected $country;

    /**
     *
     * @var integer
     */
    protected $clicks;

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
    protected $id_post;

    /**
     *
     * @var string
     */
    protected $session;

    /**
     *
     * @var string
     */
    protected $url_current;

    /**
     *
     * @var string
     */
    protected $url_ref;

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
     * Method to set the value of field ip
     *
     * @param string $ip
     * @return $this
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Method to set the value of field country
     *
     * @param string $country
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Method to set the value of field clicks
     *
     * @param integer $clicks
     * @return $this
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;

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
     * Method to set the value of field id_post
     *
     * @param integer $id_post
     * @return $this
     */
    public function setIdPost($id_post)
    {
        $this->id_post = $id_post;

        return $this;
    }

    /**
     * Method to set the value of field session
     *
     * @param string $session
     * @return $this
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Method to set the value of field url_current
     *
     * @param string $url_current
     * @return $this
     */
    public function setUrlCurrent($url_current)
    {
        $this->url_current = $url_current;

        return $this;
    }

    /**
     * Method to set the value of field url_ref
     *
     * @param string $url_ref
     * @return $this
     */
    public function setUrlRef($url_ref)
    {
        $this->url_ref = $url_ref;

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
     * Returns the value of field ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Returns the value of field country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the value of field clicks
     *
     * @return integer
     */
    public function getClicks()
    {
        return $this->clicks;
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
     * Returns the value of field id_post
     *
     * @return integer
     */
    public function getIdPost()
    {
        return $this->id_post;
    }

    /**
     * Returns the value of field session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Returns the value of field url_current
     *
     * @return string
     */
    public function getUrlCurrent()
    {
        return $this->url_current;
    }

    /**
     * Returns the value of field url_ref
     *
     * @return string
     */
    public function getUrlRef()
    {
        return $this->url_ref;
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
        return 'visitor_registry';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return VisitorRegistry[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return VisitorRegistry
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
            'ip' => 'ip',
            'country' => 'country',
            'clicks' => 'clicks',
            'id_reg' => 'id_reg',
            'id_web' => 'id_web',
            'id_post' => 'id_post',
            'session' => 'session',
            'url_current' => 'url_current',
            'url_ref' => 'url_ref',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at'
        );
    }

}
