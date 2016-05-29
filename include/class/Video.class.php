<?php

class Video {

    //Déclaration des attributs
    private $id_video;
    private $id_genre;
    private $id_utilisateur;
    private $titre;
    private $description;
    private $date;
    private $video;

    /*
     * GETTER
     */

    //Accesseurs $id_video
    public function getIdVideo() {
        return $this->id_video; //retourne id_video
    }
    
    //Accesseurs $id_genre
    public function getIdGenre() {
        return $this->id_genre; //retourne id_genre
    }

    //Accesseurs $id_utilisateur
    public function getIdUtilisateur(){
        return $this->id_utilisateur; //retourne l'id utilisateur
    }
    
    //Accesseurs $titre
    public function getTitre() {
        return $this->titre; //retourne titre
    }

    //Accesseurs $description
    public function getDescription() {
        return $this->description; //retourne description
    }

    //Accesseurs $date
    public function getDate() {
        return $this->date; //retourne date
    }

    //Accesseurs $video
    public function getVideo() {
        return $this->video; //retourne video
    }

    /*
     * SETTER
     */

    public function setIdVideo($id_video) {
        $this->id_video = $id_video; //écrit dans l'attribut id_video
    }

    public function setIdGenre($id_genre) {
        $this->id_genre = $id_genre; //écrit dans l'attribut genre
    }
    
    public function setIdUtilisateur($id_utilisateur) {
        $this->video = $id_utilisateur; //écrit dans l'attribut id_utilisateur
    }

    public function setTitre($titre) {
        $this->titre = $titre; //écrit dans l'attribut titre
    }

    public function setDescription($description) {
        $this->description = $description; //écrit dans l'attribut description
    }

    public function setDate($date) {
        $this->date = $date; //écrit dans l'attribut date
    }

    public function setVideo($video) {
        $this->video = $video; //écrit dans l'attribut video
    }
    
}
