### IziDev\Provider\es_CO\Person

```php

<?php
 
 // Generates Número Único de Identificación Personal (NUIP) number
 echo $faker->nuip; // '1234567890'
 ```

### Faker\Provider\es_CO\Address

```php
<?php

// Generates a state (department) name
echo $faker->state; // 'Antioquia'

// Generates a community (municipality) name
echo $faker->community; // 'Puerto Alegría'
 ```

### Faker\Provider\es_CO\Phone

```php
<?php

// Generates a state (department) name
echo $faker->phoneNumberFormat("+57 ({{mobileOperatorCode}})###-####"); // '57 (305)300-4444'
 ```