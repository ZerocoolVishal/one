<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 5/10/18
 * Time: 7:20 PM
 */

$movies = \app\models\Content::find()->all();
?>

<div class="py-5 bg-light">
    <div class="container">
        <h1>Movie Index 🧐</h1>
        <p class="text-muted">All movies we have, if you dont find movie in the index please make a request 👉<a href="#request_movie">here</a> for that movie and we will make that available.</p>

        <div style="margin:30px">
            <input type="text" class="form-control" id="name" onkeyup="myFunction()" placeholder="Search for title.." title="Search for movies and series">
        </div>
        <table class="table table-striped table-borderless" id="movie_list">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">type</th>
                <th scope="col">year</th>
                <th scope="col">links</th>
            </tr>
            </thead>
            <tbody id="movie_list_body">
            <?php
                if($movies) {
                    $i = 1;
                    foreach ($movies as $movie) {
                        echo "<tr>";
                        echo "<td scope=\"col\">$i</td>";
                        echo "<td scope=\"col\">$movie->title</td>";
                        $categoryName = $movie->category0->name;
                        echo "<td scope=\"col\">$categoryName</td>";
                        echo "<td scope=\"col\">$movie->launchYear</td>";
                        echo "<td scope=\"col\">";
                            foreach ($movie->links as $link) {
                                echo "<a href='$link->url' style='margin-right: 10px' target='_blank'>$link->name</a>";
                            }
                        echo "</td>";
                        echo "</tr>";
                        $i++;
                    }
                }
            ?>
            </tbody>
        </table>

        <div id="request_movie" style="padding-top:30px; padding-bottom:30px;">
            <?php include "components/request_movie.php"?>
        </div>
    </div>
</div>