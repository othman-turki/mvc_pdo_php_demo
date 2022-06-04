<?php
function get_city_by_name($city)
{
    global $db;
    $query = 'SELECT * FROM city
                WHERE Name = :city
                ORDER BY Population DESC';

    $statement = $db->prepare($query);
    $statement->bindValue(':city', $city);
    $statement->execute();
    //$results = $statement->fetch();
    $results = $statement->fetchAll();
    $statement->closeCursor();

    return $results;
}

function insert_city($new_city, $country_code, $district, $population)
{
    global $db;
    $count = 0;

    $query = 'INSERT INTO city 
                (Name, CountryCode, District, Population) 
                VALUES (:city, :country_code, :district, :population)';

    $statement = $db->prepare($query);
    $statement->bindValue(':city', $new_city);
    $statement->bindValue(':country_code', $country_code);
    $statement->bindValue(':district', $district);
    $statement->bindValue(':population', $population);
    if ($statement->execute()) {
        $count = $statement->rowCount();
    }
    $statement->closeCursor();

    return $count;
}

function update_city($id, $city, $country_code, $district, $population)
{
    global $db;
    $count = 0;

    $query = 'UPDATE city 
                SET
                    Name = :city,
                    CountryCode = :country_code,
                    District = :district,
                    Population = :population
                WHERE ID = :id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':country_code', $country_code);
    $statement->bindValue(':district', $district);
    $statement->bindValue(':population', $population);
    if ($statement->execute()) {
        $count = $statement->rowCount();
    }
    $statement->closeCursor();

    return $count;
}

function delete_city($id)
{
    global $db;
    $count = 0;

    $query = 'DELETE FROM city  
              WHERE ID = :id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    if ($statement->execute()) {
        $count = $statement->rowCount();
    }
    $statement->closeCursor();

    return $count;
}
