<?php

require_once 'Model.php';

class User extends Model
{
    protected static $table = 'contacts';

    public static function find($id)
    {
        self::dbConnect();
        $query = 'SELECT * FROM contacts WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result) {
            $instance = new static;
            $instance->attributes = $result;
        }

        return $instance;
    }

    // get all rows from contacts table
    public static function all()
    {
        // get all rows
        self::dbConnect();
        $stmt = self::$dbc->query('SELECT * FROM contacts');

        // assign results to variable
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function save()
    {
        self::dbConnect();

        // ensure attributes array is not empty before saving
        if(isset($this->attributes)) {
            if(isset($this->attributes['id'])) {
                $this->update();
            } else {
                $this->insert();
            }
        }
    }

    public function update()
    {   
        $query = 'UPDATE contacts
                    SET last_name = :last
                    first_name = :first
                    username = :user
                    email = :email
                    cell = :cell
                    WHERE id = :id';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':last',   $this->attributes['last_name'],     PDO::PARAM_STR);
        $stmt->bindValue(':first',  $this->attributes['first_name'],    PDO::PARAM_STR);
        $stmt->bindValue(':user',   $this->attributes['username'],      PDO::PARAM_STR);
        $stmt->bindValue(':email',  $this->attributes['email'],         PDO::PARAM_STR);
        $stmt->bindValue(':cell',   $this->attributes['cell'],          PDO::PARAM_STR);
        $stmt->bindValue(':id',     $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function insert()
    {
        $query = 'INSERT INTO contacts (last_name, first_name, username, email, cell) 
            VALUES (:last, :first, :user, :email, :cell)';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':last', $this->attributes['last_name'], PDO::PARAM_STR);
        $stmt->bindValue(':first', $this->attributes['first_name'], PDO::PARAM_STR);
        $stmt->bindValue(':user', $this->attributes['username'], PDO::PARAM_STR);
        $stmt->bindValue(':email', $this->attributes['email'], PDO::PARAM_STR);
        $stmt->bindValue(':cell', $this->attributes['cell'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function delete()
    {
        self::dbConnect();
        
        $query = 'DELETE * FROM users WHERE id = :id';
        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}