<?php

require '../BusinessLogic/Dabes.php';
require '../BusinessLogic/Read.php';
require '../BusinessLogic/Create.php';
$create = new CreateFilm();
$read = new Read();

$genres = $read->showListGenres();
$directors = $read->showDirector();
$productions = $read->showProduction();
$films = $read->showFilms();
$genres = $read->showListGenres();

?>
<?php require 'header.php' ?>
<h2>Dashboard</h2>
<div class="dahsboard">
    <div class="row">
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-primary shadow  mb-2 bg-body rounded" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="status-film">
                                <h6 class="card-title count">COUNT DATA FILMS</h6>
                                <p class="status">123 Films</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-film icon-film" viewBox="0 0 20 20">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-success shadow  mb-2 bg-body rounded" style="max-width: 18rem;">
                <div class="card-body text-success">
                    <div class="row">
                        <div class="col-9">
                            <div class="status-film">
                                <h6 class="card-title count">COUNT DATA GENRES</h6>
                                <p class="status">40 Genres</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-film icon-film" viewBox="0 0 20 20">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-warning shadow  mb-2 bg-body rounded" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="status-film">
                                <h6 class="card-title count">COUNT DATA PRODUCTIONS</h6>
                                <p class="status">25 Productions</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-film icon-film" viewBox="0 0 20 20">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mt-4 border border-4 border-end-0 border-top-0 border-bottom-0 border-info shadow  mb-2 bg-body rounded" style="max-width: 18rem;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <div class="status-film">
                                <h6 class="card-title count">COUNT DATA DIRECTORS</h6>
                                <p class="status">31 Films</p>
                            </div>
                        </div>
                        <div class="col-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-film icon-film" viewBox="0 0 20 20">
                                <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-9">
            <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                <div class="card-header">
                    <a href="#" class="title-card">Table Films</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm tabel   ">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Title</th>
                            <th scope="col">Genre</th>
                            <th scope="col">Production</th>
                            <th scope="col">Release Date</th>
                            <th scope="col">Director</th>
                        </tr>
                        <?php $a = 1 ?>
                        <?php foreach ($films as $film) : ?>
                            <tr>
                                <td><?php echo $a ?></td>
                                <td><?php echo $film['title'] ?></td>
                                <td><?php echo $film['genre_name'] ?></td>
                                <td><?php echo $film['name_production'] ?></td>
                                <td><?php echo $film['release_date'] ?></td>
                                <td><?php echo $film['name'] ?></td>
                            </tr>
                            <?php $a++ ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                        <div class="card-header">
                            <a href="#" class="title-card">Table Directors</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm tabel   ">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name </th>
                                    <th scope="col">About</th>
                                </tr>
                                <?php $a = 1 ?>
                                <?php foreach ($directors as $director) : ?>
                                    <tr>
                                        <td><?php echo $a ?></td>
                                        <td><?php echo $director['name'] ?></td>
                                        <td><?php echo $director['about'] ?></td>
                                    </tr>
                                    <?php $a++ ?>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                        <div class="card-header">
                            <a href="#" class="title-card">Table Genres</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-sm tabel   ">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Genre List</th>
                                </tr>
                                <?php $a = 1 ?>
                                <?php foreach ($genres as $genre) : ?>
                                    <tr>
                                        <td><?php echo $a ?></td>
                                        <td><?php echo $genre['genre_list'] ?></td>
                                    </tr>
                                    <?php $a++ ?>
                                <?php endforeach ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">
            <div class="card mt-4 shadow  mb-2 bg-body rounded" style="max-width: 60rem;">
                <div class="card-header">
                    <a href="#" class="title-card">Table Productions</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm tabel   ">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name Company</th>
                            <th scope="col">Founded Date</th>
                        </tr>
                        <?php $a = 1 ?>
                        <?php foreach ($productions as $production) : ?>
                            <tr>
                                <td><?php echo $a ?></td>
                                <td><?php echo $production['name_production'] ?></td>
                                <td><?php echo $production['founded_date'] ?></td>
                            </tr>
                            <?php $a++ ?>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

    </div>
</div>


</table>

<?php require 'footer.php' ?>