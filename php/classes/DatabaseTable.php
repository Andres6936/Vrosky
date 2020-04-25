<?php

class DatabaseTable
{

    // Fields

    private $pdo;
    private $table;
    private $primaryKey;

    // Constructs

    /**
     * DatabaseTable constructor
     * @param PDO $pdo Connection to Database
     * @param string $table Name table in MySQL
     * @param string $primaryKey Primary Key of table
     */
    public function __construct(PDO $pdo, string $table, string $primaryKey)
    {
        $this->pdo = $pdo;
        $this->table = $table;
        $this->primaryKey = $primaryKey;
    }

    // Methods

    private function query($sql, $parameters = [])
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($parameters);
        return $query;
    }

    public function total()
    {
        $query = $this->query('SELECT COUNT(*) FROM ' . $this->table);
        $row = $query->fetch();
        return $row[0];
    }

    /**
     * Find a single record from any table using the primary key.
     * @param $value mixed Value of the primary registry key.
     * @return mixed Record from any table.
     */
    public function findById($value)
    {
        $query = 'SELECT * FROM ' . $this->table . ' WHERE '
            . $this->primaryKey . ' = :value';

        $parameters = ['value' => $value];
        $query = $this->query($query, $parameters);
        return $query->fetch();
    }

    public function insert($fields)
    {
        if ($fields[$this->primaryKey] == '') {
            $fields[$this->primaryKey] = null;
        }

        $query = 'INSERT INTO ' . $this->table . ' (';

        foreach ($fields as $key => $value) {
            $query .= $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ') VALUES (';

        foreach ($fields as $key => $value) {
            $query .= ':' . $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ')';

        $fields = $this->processDates($fields);

        $this->query($query, $fields);
    }

    public function update($fields, $valueKey)
    {
        $query = ' UPDATE ' . $this->table . ' SET ';

        foreach ($fields as $key => $value) {
            $query .= $key . ' = :' . $key . ',';
        }

        $query = rtrim($query, ',');

        $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';

        // Set the :primaryKey variable
        $fields['primaryKey'] = $valueKey;

        $fields = $this->processDates($fields);

        $this->query($query, $fields);
    }

    /**
     * Increases the value of an existing record by
     * the value passed by the parameter.
     * @param $fields array Column of table.
     * @param $primaryKey mixed Value of the primary registry key.
     * @param $valueBy int Value of increment.
     */
    public function incrementBy($fields, $primaryKey, $valueBy)
    {
        $query = ' UPDATE ' . $this->table . ' SET ';

        foreach ($fields as $key) {
            $query .= $key . ' = ' . $key . ' + ' . $valueBy . ',';
        }

        $query = rtrim($query, ',');

        $query .= ' WHERE ' . $this->primaryKey . ' = ' . $primaryKey;

        $this->query($query);
    }

    /**
     * Delete a register with a specific ID from the database.
     * @param $id mixed Value of the primary registry key.
     */
    public function delete($id)
    {
        $parameters = [':id' => $id];

        $this->query('DELETE FROM ' . $this->table . ' WHERE '
            . $this->primaryKey . ' = :id', $parameters);
    }

    public function findAll()
    {
        $result = $this->query('SELECT * FROM ' . $this->table);

        return $result->fetchAll();
    }

    private function processDates($fields)
    {
        foreach ($fields as $key => $value) {
            if ($value instanceof DateTime) {
                $fields[$key] = $value->format('Y-m-d');
            }
        }

        return $fields;
    }
}