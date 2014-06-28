<?php
/**
 * Data base connecting class
 *
 * @author Aurelle Meless
 */
class dbo extends PDO{
    /**
     *
     * @var string database host 
     */
    protected $_host;
    /**
     *
     * @var string database name 
     */
    protected $_name;
    /**
     *
     * @var string database user name
     */
    protected $_user;
    /**
     *
     * @var string database user password 
     */
    protected $_password;
    /**
     *
     * @var integer database port
     */
    protected $_port;
    
    protected $_cnx;
    
    function __construct() {
        $this->setParams(config::$params);
        parent::__construct('mysql:host='.$this->_host.';port='.$this->_port.';dbname='.$this->_name.'', ''.$this->_user.'',''.$this->_password.'');
        
    }
    
    protected function setParams($params) {
        $this->host=$params['dbhost'];
        $this->name=$params['dbname'];
        $this->port=$params['dbport'];
        $this->user=$params['dbuser'];
        $this->password=$params['dbpassword'];
    }
    
}
