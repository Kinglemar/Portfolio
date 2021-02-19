<footer>
        <ul>
            <li class="fix"><?= lyn_copyright() ?></li>
            <!-- <li><a href="">Contact Me</a></li> -->
            <li><a href="https://github.com/Kinglemar?tab=repositories" target="_blank">github</a></li>
            <!-- <li><a href="">Privacy</a></li> -->
        </ul>
</footer>

<?php 
function lyn_copyright(){
    $current_year = date('Y');
    $current_year_short = date('y');
    if($current_year == 2020){
        echo '&copy' . '2020'. ',' . ' Free Mind, inc';
    }
    else{
        echo '&copy' . '2020' . ' ' .  '-' . ' ' . $current_year_short. ' Free Mind, inc';
    }
}