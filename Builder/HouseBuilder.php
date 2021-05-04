<?php

class HouseBuilder
{
    private $_id;

    private $_address;

    private $_doors;

    private $_rooms;

    private $_windows;

    /**
     * Set the value of _id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->_id = $id;

        return $this;
    }

    /**
     * Set the value of _address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->_address = $address;

        return $this;
    }

    /**
     * Set the value of _doors
     *
     * @return  self
     */ 
    public function setDoors($doors)
    {
        $this->_doors = $doors;

        return $this;
    }

    /**
     * Set the value of _rooms
     *
     * @return  self
     */ 
    public function setRooms($rooms)
    {
        $this->_rooms = $rooms;

        return $this;
    }

    public function build()
    {
        return new House(
            $this->_id,
            $this->_address,
            $this->_doors,
            $this->_rooms,
            $this->_windows
        );
    }
}