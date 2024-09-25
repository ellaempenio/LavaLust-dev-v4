<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class user_model extends Model
{
    public function read()
    {
        return $this->db->table('eve_users')->get_all();
    }

    public function create($lastname, $firstname, $email, $gender, $address)
    {
        $data = array(
            'eve_last_name' => $lastname,
            'eve_first_name' => $firstname,
            'eve_email' => $email,
            'eve_gender' => $gender,
            'eve_address' => $address
        );
        return $this->db->table('eve_users')->insert($data);
    }

    public function get1($id)
    {
        return $this->db->table('eve_users')->where('id', $id)->get();
    }

    public function update($lastname, $firstname, $email, $gender, $address, $id)
    {
        $data = array(
            'eve_last_name' => $lastname,
            'eve_first_name' => $firstname,
            'eve_email' => $email,
            'eve_gender' => $gender,
            'eve_address' => $address
        );
        return $this->db->table('eve_users')->where('id', $id)->update($data);
    }

    public function delete($id)
    {
        return $this->db->table('eve_users')->where('id', $id)->delete();
    }
}