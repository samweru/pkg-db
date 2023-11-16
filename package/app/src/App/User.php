<?php
namespace {{app}};

class User extends \Strukt\Db\Type\Red\Contract\Entity{

	/**
     * @Type(string)
     */
	public $username;

	/**
     * @Type(string)
     */
	public $password;

	/**
     * @Type(string)
     */
	public $status;

	/**
     * @Type(datetime)
     */
    public $created_at;
}