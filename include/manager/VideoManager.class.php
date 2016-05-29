<?php

class VideoManager {

    //instance pdo
    private $base;

    public function __construct($base) {

        $this->setDb($base);
    }

    public function setDb($base) {
        $this->base = $base;
    }

    public function getContenuParDate() {
        $tableau = array();
        $compteur = 0;
        // requete SQL qui séléctionne toutes les vidéos et les trie par date dans l'odre décroissant
        $resultat = $this->base->query('SELECT * FROM video order by Date DESC'); 
        //Liste des lignes
        while ($ligne = $resultat->fetch()) {
            $video = new Video();
            $video->setIdVideo($ligne['id_video']);
            $video->setIdGenre($ligne['id_genre']);
            $video->setTitre($ligne['titre']);
            $video->setDescription($ligne['description']);
            $video->setDate($ligne['date']);
            $video->setVideo($ligne['video']);
            //Stockage de l'objet dans le tableau
            $tableau[$compteur] = $video;
            $compteur++;
        }
        return $tableau;
    }

    // Fonction qui insert les videos
    public function insertionVideo(Video $video) {
        //Insertion des informations vidéos
        $sql = "INSERT INTO video(id_genre, titre, description, date, video) VALUES ('" .$video->getIdGenre() . "','" .$video->getTitre() . "', ". "'" . $video->getDescription() . "','" . $video->getDate() . "','" . $video->getVideo() . "')";
        $this->base->exec($sql);
    }

    //fonction qui permet de supprimer les vidéos
    public function deleteVideo($id_video) {
        if ($id_video <= 0) {
            return 0;
        }
        $sql = "DELETE FROM video WHERE id_video=" . $id_video;
        return $this->base->exec($sql);
    }

}
