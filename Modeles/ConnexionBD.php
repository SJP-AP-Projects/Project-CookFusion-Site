<?php

/**
 * Classe abstraite pour les classes DAO
 */
class Base
{
    private $db;

    /**
     * Constructeur de la classe Base
     * @param string $user
     * @param string $mdp
     */
    public function __construct(string $user, string $mdp)
    {
        try {
            /* ============================= BD DISTANTE =============================================== */
            $serveurBdDistant = 'mysql-webdiz.alwaysdata.net';
            $nomBdDistante = "webdiz_bddcuisine";
            $this->db = new PDO("mysql:host=" . $serveurBdDistant . ";dbname=" . $nomBdDistante, $user, $mdp);

            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer les exceptions PDO
            $this->db->query("SET CHARACTER SET utf8");
        } catch (PDOException $erreur) {
            die("Erreur de connexion à la base de données : " . $erreur->getMessage());
        }
    }

    /**
     * Exécute une requête simple (non préparée).
     * @param string $sql
     * @return PDOStatement|false
     */
    public function query(string $sql)
    {
        return $this->db->query($sql);
    }

    /**
     * Exécute une requête simple d'écriture (non préparée).
     * @param string $sql
     * @return int|false
     */
    public function exec(string $sql)
    {
        return $this->db->exec($sql);
    }

    /**
     * Prépare une requête SQL et l'exécute avec les paramètres fournis.
     * @param string $sql Requête SQL avec des marqueurs nommés ou anonymes
     * @param array $params Paramètres à lier à la requête (clé/valeur pour marqueurs nommés, indexé pour anonymes)
     * @return PDOStatement|false
     */
    public function prepareAndExecute(string $sql, array $params = [])
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Erreur lors de l'exécution de la requête préparée : " . $e->getMessage());
        }
    }

    /**
     * Prépare une requête SQL et retourne l'objet PDOStatement sans l'exécuter.
     * @param string $sql Requête SQL avec des marqueurs nommés ou anonymes
     * @return PDOStatement|false
     */
    public function prepare(string $sql)
    {
        return $this->db->prepare($sql);
    }
}
