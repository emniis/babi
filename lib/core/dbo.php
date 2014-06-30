<?php
/**
 * Data base connecting class
 *
 * @author Aurelle Meless
 */
class dbo extends PDO{
    
    function __construct() {
        parent::__construct(DB_DRIVER.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
    }
    
}
