<?php 
class Query
{
	private $db;

	public function __construct()
	{
		try {
			$this->db = new PDO("mysql:host=localhost;dbname=tickets","root","");
			$this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $this->db;
	}

	public function result($value)
	{
		try {
			$data=$this->db->prepare("$value");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $data;
	}
	public function select($tab,$value='*')
	{
		try {
			$data = $this->db->prepare("SELECT $value FROM $tab");
			$data->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
		return $this->db;
	}
	public function insert($tab,$value)
	{
		try {
			$this->db->prepare("INSERT INTO $tab VALUES($value)");
			$this->db->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function update($tab,$value)
	{
		try {
			$this->db->prepare("UPDATE $tab SET $value");
			$this->db->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function del($value)
	{
		try {
			$this->db->prepare("DELETE FROM $value");
			$this->db->execute();
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function lastId($value)
	{
		try {
			return $this->db->lastInsertId($value);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	public function row($value)
	{
		return $data=$value->rowCount();
	}
	public function sant($value)
	{
		try {
			return $data=filter_input_array($value,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
$base = new Query();
include "javaSc.php";
 ?>