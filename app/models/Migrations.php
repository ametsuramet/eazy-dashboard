<?php

class Migrations extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    protected $migration;

    /**
     *
     * @var integer
     */
    protected $batch;

    /**
     * Method to set the value of field migration
     *
     * @param string $migration
     * @return $this
     */
    public function setMigration($migration)
    {
        $this->migration = $migration;

        return $this;
    }

    /**
     * Method to set the value of field batch
     *
     * @param integer $batch
     * @return $this
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Returns the value of field migration
     *
     * @return string
     */
    public function getMigration()
    {
        return $this->migration;
    }

    /**
     * Returns the value of field batch
     *
     * @return integer
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'migrations';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Migrations[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Migrations
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
            'migration' => 'migration',
            'batch' => 'batch'
        );
    }

}
