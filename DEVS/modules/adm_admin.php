<?php
require_once "adm_admin_service.php";
/**
 * Class Adm_admin | fichier adm_admin.php
 *
 * Description de la classe à renseigner.
 *
 * Cette classe necessite l'utilisation de la classe :
 *
 * require_once "adm_admin_service.php";
 *
 * @package Afpanier v3 Project
 * @subpackage Adm_admin
 * @author @AfpaLabTeam - Perez Guy
 * @copyright  1920-2080 Afpa Lab Team - CDA 20303
 * @version v1.0
 */

Class Adm_admin	{
	
    /**
     * public $resultat is used to store all datas needed for HTML Templates
     * @var array
     */
    public $resultat;

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
     * Get interface to gestion of adm_admin
     */
    function main() {
		$objet_service = new Adm_admin_service();
		// Ici je fais mon appel $objet_service->ma_methode_qui_est_dans_le_service
		
		// Je passe mes parametres pour y avoir acces dans mes pages HTML
		$this->resultat = $objet_service->resultat;
		$this->VARS_HTML = $objet_service->VARS_HTML;
    }
	
}

?>

