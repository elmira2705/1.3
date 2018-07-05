<?php
     $continents = [
         'Africa' => ['Amblysomus', 'Calcochloris obtusirostris', 'Chrysospalax trevelyani', 'Canis'],
         'Australia' => ['Dasycercus', 'Dasykaluta rosamondae', 'Parantechinus', 'Sarcophilus harrisii'],
         'America' => ['Alopex lagopus', 'Urocyon cinereoargenteus', 'Vulpes macrotis', 'Leopardus pardalis'],
         'Europe' => ['Alopex lagopus', 'Nyctereutes procyonoides', 'Gulo'],
];

$first_word = array();
$second_word = array();
$animal_two_words = array();
$two_in_one = array();
foreach ($continents as $continent => $animal_arr) {
    foreach ($animal_arr as $animal) {
        $pair_words = explode(' ', $animal);
        if (count($pair_words) == 2) {
            $animal_two_words[] = $animal;
            $first_word[] = $pair_words[0];
            $second_word[] = $pair_words[1];
        }
    }
}
shuffle($second_word);
for ($i=0; $i<count($first_word); $i++) {
    $two_in_one[] = $first_word[$i] . " " . $second_word[$i] . "<br>";
}
echo "<h2>Название фантазийных животных :</h2>";
echo '<pre>';
echo implode(PHP_EOL, $two_in_one);
