<?php
/**
 * General controllers
 * Get = select
 * Post = insert
 * Put = update
 * Delete = delete
 */
class Controllers {

// ####################################################################### PARTIE SECURISATION
/**
   * Sécurise les variables d'un tableau clé/valeur
   *
   * @param array => Tableau
   * @return array => Tableau avec les valeur après sécurisation : supprime les balises HTML et PHP d'une chaine de caractère,
   * remplace les espaces trops longs,
   * traduit les entités HTML dans une chaine de caractères,
   * enleve les espaces du début et de fin,
   */
    public static function secureArray($array) {
        $newArray = array();
        foreach ($array as $key => $value) {
        // Si la valeur n'est pas un tableau
            if (!is_array($value)) {
                $value = strip_tags($value); // Supprime les balises HTML et PHP d'une chaine de caractère
                $value = htmlspecialchars($value); // Traduit les entités HTML dans une chaine de caractères
                $value = Trim($value); // Enleve les espaces du début et de fin
                $newArray[$key] = $value; // Remplace dans le tableau l'ancienne valeur par la nouvelle
        // Sinon on remet les valeurs telles quelles
            } else {
                $newArray[$key] = $value;
            }
        }
    return $newArray;
    }
    public static function writingHello($maVar) {
        $returnText = "Bonjour " . $maVar . "<br>";

    return $returnText;
    }
}
