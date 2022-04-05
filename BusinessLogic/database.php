<?php

class Dabes
{
    public function __construct()
    {
        // connection database
        $db_user = "root";
        $db_pass = "root";
        $db_host = "localhost";
        $db_name = "Films";

        // check the connection
        try {
            $this->db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_pass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            die("Connection error: " . $exception->getMessage());
        }
    }

    public function addFilm($data)
    {
        $title = self::validate($data['title']);
        $genres = $data['genres'];
        $synopsis = self::validate($data['synopsis']);
        $release_date = self::validate($data['release_date']);
        $runtime = self::validate($data['runtime']);
        $production = self::validate($data['production']);
        $director = self::validate($data['director']);
        $picture = $data['picture'];
        $merge_genre = implode(", ", $genres);

        // query to Films table
        $query = $this->db->prepare("INSERT INTO Films (title, release_date, picture, synopsis ,runtime) VALUES (:title, :release_date, :picture, :synopsis, :runtime)");
        $query->bindParam(':title', $title);
        $query->bindParam(':synopsis', $synopsis);
        $query->bindParam(':release_date', $release_date);
        $query->bindParam(':picture', $picture);
        $query->bindParam(':runtime', $runtime);
        $query->execute();

        // insert data genres_films
        $query = $this->db->prepare("INSERT INTO genres_films (genre_name) VALUE (:genre) ");
        $query->bindParam(':genre', $merge_genre);
        $query->execute();

        // select the newest data from films
        $query = $this->db->prepare("SELECT max(id_film) AS last_id FROM films LIMIT 1");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        $last_id = $result[0]["last_id"];

        // select the newest data from genres_films
        $query = $this->db->prepare("SELECT max(genre_id) AS genre FROM genres_films LIMIT 1");
        $query->execute();
        $id_result = $query->fetchAll(PDO::FETCH_ASSOC);
        $id_genre = $id_result[0]["genre"];

        // insert data film_production
        $query = $this->db->prepare("INSERT INTO films_productions (film_id, production_id) VALUES (:last_id, :production_id)");
        $query->bindParam(':last_id', $last_id);
        $query->bindParam(':production_id', $production);
        $query->execute();

        // insert data films_genres
        $query = $this->db->prepare("INSERT INTO films_genres (film_id, genre_id) VALUES (:last_id, :id_genre)");
        $query->bindParam(':last_id', $last_id);
        $query->bindParam(':id_genre', $id_genre);
        $query->execute();

        // insert data films_directors
        $query = $this->db->prepare("INSERT INTO films_directors (film_id, directors_id) VALUE (:last_id, :director_id)");
        $query->bindParam(':last_id', $last_id);
        $query->bindParam(':director_id', $director);
        $query->execute();

        return $query->rowCount();
    }

    public function showGenres()
    {
        $query = $this->db->prepare("SELECT * FROM genres");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function showListGenres()
    {
        $query = $this->db->prepare("SELECT * FROM genre_list");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    public function showProduction()
    {
        $query = $this->db->prepare("SELECT * FROM productions");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function showDirector()
    {
        $query = $this->db->prepare("SELECT * FROM directors");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public function showFilms()
    {
        $sql = "SELECT films.id_film, films.picture, films.title, genres_films.genre_name, productions.name_production, films.release_date FROM films 
                INNER JOIN films_genres ON films.id_film = films_genres.film_id 
                INNER JOIN films_productions ON films.id_film = films_productions.film_id
                INNER JOIN genres_films ON genres_films.genre_id = films_genres.genre_id 
                INNER JOIN productions ON productions.id_production = films_productions.production_id
                ";
        $query = $this->db->prepare($sql);
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function addGenre_ist($data)
    {
        $name_genre = self::validate($data['genre_list']);

        $query = $this->db->prepare("INSERT INTO genre_list (genre_list) VALUES (:new_genre)");
        $query->bindParam(':new_genre', $name_genre);
        $query->execute();

        return $query->rowCount();
    }

    public function addProduction_list($data)
    {
        $name_production = self::validate($data['name_production']);
        $founded_date = $data['founded_date'];

        $query = $this->db->prepare("INSERT INTO productions (name_production, founded_date) VALUES ()");
        $query->bindParam(':new_production', $name_production);
        $query->bindParam(':founded_date', $founded_date);
        $query->execute();

        return $query->rowCount();
    }

    public function addDirector_list($data)
    {
        $director_name = self::validate($data['name']);
        $about = self::validate($data['about']);

        $query = "INSERT INTO directors (name, about) VALUES ('$director_name', '$about')";
        $query = $this->db->prepare("INSERT INTO directors (name, about) VALUES ()");
        $query->bindParam(':new_director', $director_name);
        $query->bindParam(':about', $about);
        $query->execute();

        return $query->rowCount();
    }

    public function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function uploadFilm($data)
    {
        $name = $data['picture']['name'];
        $tmp_name = $data['picture']['tmp_name'];
        $size = $data['picture']['size'];
        $error = $data['picture']['error'];

        if ($error === 4) {
            echo "choose the picture first";
            return false;
        }
        $extension_valid = ['png', 'jpg', 'jpeg'];
        $extension = pathinfo($name, PATHINFO_EXTENSION);
        $extension = strtolower($extension);

        if (!in_array($extension, $extension_valid)) {
            echo "the picture must be [png, jpg or jpeg]";
            return false;
        }
        if ($size > 3000000) {
            echo "the picture size to big";
        }

        $namePicture = uniqid();
        $namePicture .= '.';
        $namePicture .= $extension;

        move_uploaded_file($tmp_name, '../Views/uploaded', $namePicture);

        return $namePicture;
    }
}