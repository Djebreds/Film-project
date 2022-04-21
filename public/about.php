<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Author: Refi Ahmad Fauzan , This page is about web was created">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Views/css/style-public-user.css">
    <title>List Film | About </title>
</head>

<?php require 'header.php' ?>
<section>
    <div class="container">
        <div class="row g-0 ">
            <div class="col-2">
                <nav class="nav flex-column side-nav">
                    <a class="nav-link" aria-current="page" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0d6efd" class="bi bi-house-fill" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                        </svg> Home</a>
                    <a class="nav-link" href="film.php?page=All"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0d6efd" class="bi bi-camera-video-fill" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                        </svg> Film</a>
                    <hr class="line">
                    <a class="nav-link mb-3 text-primary fw-bold" href="about.php"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#0d6efd" class="bi bi-info-circle-fill" viewBox="0 0 20 20">
                            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                        </svg> About</a>
                </nav>
            </div>
            <div class="col-md-10">
                <div class="card mt-4">
                    <div class="card-body">
                        <div class="about">
                            <p class="text-center mt-4">This page created by Refi Ahmad Fauzan</p>
                            <p class="text-center">The technology used is PHP Native, HTML, CSS and Bootstrap 5</p>
                            <p class="text-center mb-4">Created on 4 April 2022</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require 'footer.php' ?>