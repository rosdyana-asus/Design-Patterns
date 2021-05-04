<?php

class House
{
    private $_id;

    private $_address;

    private $_doors;

    private $_rooms;

    private $_windows;

    public function __construct($id, $address, $doors, $rooms, $windows)
    {
        $this->_id = $id;
        $this->_address = $address;
        $this->_doors = $doors;
        $this->_rooms = $rooms;
        $this->_windows = $windows;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getAddress()
    {
        return $this->_address;
    }

    public function getDoors()
    {
        return $this->_doors;
    }

    public function getRooms()
    {
        return $this->_rooms;
    }

    public function getWindows()
    {
        return $this->_windows;
    }
}