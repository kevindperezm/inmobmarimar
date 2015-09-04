<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @property CI_DB_active_record $db
 */
class Properties_model extends CI_Model {

  const TABLE_NAME = 'properties';

  public $id          = 0;
  public $code        = '';
  public $name        = '';
  public $description = '';
  public $price       = 0;

  public function __construct() {
    parent::__construct();
  }

  public function get_all() {
    $query = $this->db->get(self::TABLE_NAME);
    return $query->result();
  }

  public function get($count, $offset = 0) {
    $query = $this->db->get(self::TABLE_NAME, $count, $offset);
    return $query->result();
  }

  public function find($criteria) {
    $result = $this->find_all($criteria);
    return (empty($result)) ? null : $result[0];
  }

  public function count($criteria = array()) {
    $this->db->from(self::TABLE_NAME)->where($criteria);
    return $this->db->count_all_results();
  }

  public function get_random($limit) {
    $query = '
    SELECT *
    FROM '.self::TABLE_NAME.'
    WHERE id >= RAND() * (select MAX(id) - '.$limit.' from '.self::TABLE_NAME.')
    LIMIT '.$limit.'
    ';
    return $this->db->query($query, array($limit))->result();
  }

  public function find_all($criteria, $limit = 1, $offset = 0) {
    $qry = $this->db->get_where(self::TABLE_NAME, $criteria, $limit, $offset);
    return $qry->result();
  }

  public function search($criteria, $limit = 1, $offset = 0) {
    $query = $this->db->from(self::TABLE_NAME)->limit($limit, $offset);

    foreach ($criteria as $key => $item) {
      if (is_string($item)) {
        $query->like($key, $item);
      } else {
        $query->where($key, $item);
      }
    }

    return $query->get()->result();
  }

}
