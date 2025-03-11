 <?php

require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_PH'); 

$pdo = new PDO('mysql:host=localhost;dbname= employee', 'root', 'root');

$employeeStmt = $pdo->prepare("INSERT INTO employee (id, lastname, firstname, office_id, address) 
VALUES (?, ?, ?, ?, ?)");

for ($i = 1; $i <= 200; $i++) {
    $employeeStmt->execute([$i, $faker->lastName, $faker->firstName, rand(1, 50), $faker->address]);
}

$officeStmt = $pdo->prepare("INSERT INTO office (id, name, contactnum, email, address, city, country, postal) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

for ($i = 1; $i <= 50; $i++) {
    $officeStmt->execute([$i, $faker->company, $faker->phoneNumber, $faker->email, $faker->address, $faker->city, 'Philippines', $faker->postcode]);
}

$transactionStmt = $pdo->prepare("INSERT INTO transaction (id, employee_id, office_id, datelog, action, remarks, documentcode) 
VALUES (?, ?, ?, ?, ?, ?, ?)");

for ($i = 1; $i <= 500; $i++) {
    $transactionStmt->execute([$i, rand(1, 200), rand(1, 50), $faker->dateTimeThisYear()->format('Y-m-d H:i:s'), $faker->word, $faker->sentence, strtoupper($faker->lexify('??????'))]);
}

echo "Data generation completed!";
?>
