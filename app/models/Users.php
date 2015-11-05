<?php

use Phalcon\Mvc\Model\Validator\Email as Email;

class Users extends \Phalcon\Mvc\Model
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
    protected $name;

    /**
     *
     * @var string
     */
    protected $username;

    /**
     *
     * @var string
     */
    protected $password;

    /**
     *
     * @var integer
     */
    protected $pin;

    /**
     *
     * @var string
     */
    protected $email;

    /**
     *
     * @var integer
     */
    protected $status;

    /**
     *
     * @var integer
     */
    protected $level;

    /**
     *
     * @var string
     */
    protected $remember_token;

    /**
     *
     * @var integer
     */
    protected $id_reg;

    /**
     *
     * @var integer
     */
    protected $id_ref;

    /**
     *
     * @var string
     */
    protected $option;

    /**
     *
     * @var string
     */
    protected $profile;

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
     *
     * @var string
     */
    protected $uid;

    /**
     *
     * @var string
     */
    protected $twitter_id;

    /**
     *
     * @var string
     */
    protected $access_token_secret;

    /**
     *
     * @var string
     */
    protected $access_token;

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
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field pin
     *
     * @param integer $pin
     * @return $this
     */
    public function setPin($pin)
    {
        $this->pin = $pin;

        return $this;
    }

    /**
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

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
     * Method to set the value of field remember_token
     *
     * @param string $remember_token
     * @return $this
     */
    public function setRememberToken($remember_token)
    {
        $this->remember_token = $remember_token;

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
     * Method to set the value of field profile
     *
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

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
     * Method to set the value of field uid
     *
     * @param string $uid
     * @return $this
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Method to set the value of field twitter_id
     *
     * @param string $twitter_id
     * @return $this
     */
    public function setTwitterId($twitter_id)
    {
        $this->twitter_id = $twitter_id;

        return $this;
    }

    /**
     * Method to set the value of field access_token_secret
     *
     * @param string $access_token_secret
     * @return $this
     */
    public function setAccessTokenSecret($access_token_secret)
    {
        $this->access_token_secret = $access_token_secret;

        return $this;
    }

    /**
     * Method to set the value of field access_token
     *
     * @param string $access_token
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;

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
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field pin
     *
     * @return integer
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
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
     * Returns the value of field level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Returns the value of field remember_token
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
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
     * Returns the value of field id_ref
     *
     * @return integer
     */
    public function getIdRef()
    {
        return $this->id_ref;
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
     * Returns the value of field profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
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
     * Returns the value of field uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Returns the value of field twitter_id
     *
     * @return string
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Returns the value of field access_token_secret
     *
     * @return string
     */
    public function getAccessTokenSecret()
    {
        return $this->access_token_secret;
    }

    /**
     * Returns the value of field access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field'    => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'users';
    }

    public function initialize() {
        $this->hasMany("id", "Setting", "id_reg");
    }

     public function afterFetch()
    {
        // Convert the string to an array
        $this->profile = json_decode($this->profile);

    }


    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
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
            'name' => 'name',
            'username' => 'username',
            'password' => 'password',
            'pin' => 'pin',
            'email' => 'email',
            'status' => 'status',
            'level' => 'level',
            'remember_token' => 'remember_token',
            'id_reg' => 'id_reg',
            'id_ref' => 'id_ref',
            'option' => 'option',
            'profile' => 'profile',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
            'uid' => 'uid',
            'twitter_id' => 'twitter_id',
            'access_token_secret' => 'access_token_secret',
            'access_token' => 'access_token'
        );
    }

}
