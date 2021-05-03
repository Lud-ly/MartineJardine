<?php
require_once "adm_offer_service.php";
/**
 * Class Adm_offer_category_add | fichier adm_offer_category_add.php
 *
 * Cette classe permet d'enregistrer de nouvelles catégories de produits
 *
 * Cette classe necessite l'utilisation de la classe :
 *
 * require_once "offers_service.php";
 *
 * @package Afpanier v3 Project
 * @subpackage adm_offer_category_add
 * @author @AfpaLabTeam - Ludovic
 * @copyright  1920-2080 Afpa Lab Team - CDA 20303
 * @version v1.0
 */

Class Adm_offer_category_add	{
	
    /**
     * public $resultat is used to store all datas needed for HTML Templates
     * @var array
     */
    public $resultat;

    /**
     * public $resultat is used to store all datas needed for HTML Templates
     * @var interger
     */
    public $error;

    /**
     * init variables resultat
     *
     * execute main function
     */
    public function __construct() {
        // init variables resultat
        $this->resultat = [];

        // execute main function
        $this->main();
    }

    /**
     *
     * Destroy service
     *
     */
    public function __destruct() {
        // destroy objet_service
        unset($objet_service);
    }

    /**
     * Get interface to gestion of offers
     */
    function main() {

        $this->error= 0;
		$objet_service = new Adm_offer_service();
        $this->VARS_HTML = $objet_service->VARS_HTML;

        // if ($this->VARS_HTML["mainBasket_name"] == "" || !is_string($this->VARS_HTML["mainBasket_name"])) {
        //     $this->error++;
        // }

        // if ($this->error == 0) {
            // Ici je fais mon appel $objet_service->ma_methode_qui_est_dans_le_service
            $objet_service -> adm_offer_category_add();
        // } 
		
		// Je passe mes parametres pour y avoir acces dans mes pages HTML
		$this->resultat = $objet_service->resultat;
    }
	
}

?>

