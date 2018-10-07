<?php
/**
 * Created by PhpStorm.
 * User: vishal
 * Date: 5/10/18
 * Time: 10:12 PM
 */
?>

<div style="margin-top: 50px">
    <h1>Wanna watch a movie or series but not available ? 🤔</h1>
    <p  class="text-muted">Drop a message and we will make it available ASAP !! 😊
        Or drop a message if you wanna give us a feedback..
    </p>
    <form id="messageForm" action="message/" method="GET">
        <div class="form-group">
            <label for="email">Email address (Optional)</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="message">which movie or series u wanna see ?</label>
            <textarea class="form-control" id="message" required name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
    </form>
</div>
