<?php
class Category {
    public $connection;

    public function __construct()
    {
        $this->connection = connect();
    }

    public function getCategories() {
        $sql = "SELECT * FROM categories";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}
?>
