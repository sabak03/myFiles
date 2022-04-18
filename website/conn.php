<?php

    $conn = new PDO('sqlite:4041cem.db');
    $statement = $conn->query("SELECT * FROM Customer");
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);