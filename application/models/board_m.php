<?php
    if(!defined('BASEPATH')) exit('No direct script access allowed');

    /**
     * common board model
     */

    class Board_m extends CI_Model{
        function __construct(){
            parent::__construct();
        }


        function get_list($table = 'ci_board', $type = '', $offset = '', $limit = '') {
            $limit_query = '';
            $table_name = 'ci_board';

            if ($limit != '' OR $offset != '') {
                // 페이징이 있을 경우 처리
                $limit_query = ' LIMIT ' . $offset . ', ' . $limit;
            }

            // $sql = "SELECT * FROM ".$table;
            $sql = "SELECT * FROM ".$table_name. " ORDER BY board_id DESC " . $limit_query;
            $query = $this -> db -> query($sql);

            if ($type == 'count') {
                $result = $query->num_rows();
            } else {
                $result = $query->result();
            }
            return $result;
        }
        
        public function posts_require_all($limit, $offset){
            $this->db->limit($limit);
            $this->db->offset($offset);
            $this->db->order_by('id_key DESC');
            $query = $this->db->get('posts');
            return $query->result();
            // return $this->db->query("SELECT * FROM `posts` ORDER BY id_key")->result();
        }
        public function posts_require($id){
            return $this->db->query("SELECT * FROM `posts` WHERE id_key = '$id'")->result();
        }
        public function posts_require_comment($id){
            return $this->db->query("SELECT * FROM `comment` WHERE id_key_join=$id")->result();
        }
        public function posts_require_user($id){
            return $this->db->query("SELECT * FROM `posts` WHERE uploader_id = '$id'")->result();
        }

        public function countAll(){
            $query = $this->db->query('SELECT * FROM `posts`');
            return $query->num_rows();
        }

        // public function posts_paging($limit, $offset){
        //     /* 
        //     $sql = "SELECT * FROM `posts`";
        //     $row_num = $this->db->query($sql)->num_rows(); */

        //     return $this->db->query("SELECT * FROM `posts` ORDER BY id_key LIMIT ? OFFSET ?");
        // }

        public function posts_delete_comment($id){
            $this->db->where('id_key_join', $id);
            $this->db->delete('comment');
        }
    }
?>