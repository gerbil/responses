<?php
/*
Template Name: Responses
*/
?>

<?php get_header(); ?>

<div id="responses">
    <div id="content">
        <h1>Provident responses retry <span>using ServiceOrderID</span></h1>

        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
            <div class="rect6"></div>
            <div class="rect7"></div>
            <div class="rect8"></div>
            <div class="rect9"></div>
            <div class="rect10"></div>
            <div class="rect11"></div>
            <div class="rect12"></div>
            <div class="rect13"></div>
            <div class="rect14"></div>
            <div class="rect15"></div>
            <div class="rect16"></div>
            <div class="rect17"></div>
            <div class="rect18"></div>
            <div class="rect19"></div>
            <div class="rect20"></div>
            <div class="rect21"></div>
            <div class="rect22"></div>
        </div>

        <div class="custom-file-upload">
            <!--<label for="file">File: </label>-->
            <input type="file" id="file" name="file"/>

            <div class="submitForm">Go</div>
        </div>

        <div class="results">
            <h1>Results</h1>

            <div class="response">
                <ul></ul>
            </div>
        </div>

        <h4>Help:<br/>- Please use .csv or .txt<br/>- Please use ';' as a delimiter<br/>- File size < 2 MB</h4>
    </div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script type="text/javascript" src="./wp-content/themes/monitor/responses/js/form.js"></script>