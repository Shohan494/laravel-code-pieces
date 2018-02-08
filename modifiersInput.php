    public function setNameAttribute($name)
    {
        $this->attributes['name'] = strtolower($name);
    }
    public function getNameAttribute($name)
    {
        return ucwords($name);
    }
    public function setEmailAttribute($email)
    {
        $this->attributes['email'] = strtolower($email);
    }
