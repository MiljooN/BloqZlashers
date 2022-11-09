<body>
<header>
   <a href="https://discord.gg/thAXA6yuf5"target="_blank"> <img src="bilder/bz.png" alt=""></a>
   <nav class="nav-bar">
			<ul>
				<li>
					<a href="index.php" class="active">BloqZlashers</a>
				</li>

				<li>
					<a href="playlists.php" class="active">Playlists</a>
				</li>
			</ul>
		</nav>
    
</header>

<div class="everyone">

<?php

$dot = ".";
$pos = '2';
//Miljon
$apiMiljon = "https://scoresaber.com/api/player/76561198837548711/full";
$apiMiljonTop = "https://scoresaber.com/api/player/76561198837548711/scores";
$scApi = file_get_contents("$apiMiljon");
$decoded_json = json_decode($scApi, false);
$scApiTop = file_get_contents("$apiMiljonTop");
$decoded_jsonTop = json_decode($scApiTop, false);
$pfp = $decoded_json->profilePicture;

$cover = $decoded_jsonTop->playerScores[0]->leaderboard->coverImage;
$score = $decoded_jsonTop->playerScores[0]->score->baseScore;
$maxScore = $decoded_jsonTop->playerScores[0]->leaderboard->maxScore;
$acc = $score / $maxScore;
$acc = substr($acc, 2);
$acc = substr($acc, 0, -10);
$acc = substr_replace($acc, $dot, $pos, 0);

$missed = $decoded_jsonTop->playerScores[0]->score->missedNotes;
$bad = $decoded_jsonTop->playerScores[0]->score->badCuts;
$fail = $missed + $bad;
 ?>


<div class="card">

<div class="cardPic">
<img src="<?php echo $pfp ?>" alt="">
</div>

<div class="name">
    <a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
    <h2><a href="https://scoresaber.com/u/76561198837548711"target="_blank"><?php echo $decoded_json->name; ?></a></h2>
</div>

<div class="ranks">
    <div class="global">
        <img src="bilder/global.png" alt="">
        <h4>#<?php echo $decoded_json->rank; ?></h4>
    </div>

    <div class="local">
        <a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
        <h4>#<?php echo $decoded_json->countryRank; ?></h4>
    </div>
</div>

<div class="pp">
    <h4><?php echo $decoded_json->pp; ?>pp</h4>
</div>

<div class="topPlay">

<h3>Top Play</h3>

<div class="cover">
    <img src="<?php echo $cover; ?>" alt="">
</div>

<h3><?php echo $decoded_jsonTop->playerScores[0]->leaderboard->songName; ?></h3>
<p>By <?php echo $decoded_jsonTop->playerScores[0]->leaderboard->songAuthorName; ?></p>
<p class="mapper"><?php echo $decoded_jsonTop->playerScores[0]->leaderboard->levelAuthorName; ?></p>

<div class="scorepp">
<h4><?php echo $decoded_jsonTop->playerScores[0]->score->pp; ?>pp</h4>
</div>

<div class="stat">
    <h5><?php echo $acc; ?>%</h5>
    <h5><?php echo $fail; ?> miss</h5>
</div>



</div>

</div>
<?php
//VODKA
$apiVodka = "https://scoresaber.com/api/player/76561198403309456/full";
$apiVodkaTop = "https://scoresaber.com/api/player/76561198403309456/scores";

$scApi1 = file_get_contents("$apiVodka");
$decoded_json1 = json_decode($scApi1, false);

$scApi1Top = file_get_contents("$apiVodkaTop");
$decoded_json1Top = json_decode($scApi1Top, false);

$pfp1 = $decoded_json1->profilePicture;  

$cover1 = $decoded_json1Top->playerScores[0]->leaderboard->coverImage;
$score1 = $decoded_json1Top->playerScores[0]->score->baseScore;
$maxScore1 = $decoded_json1Top->playerScores[0]->leaderboard->maxScore;
$acc1 = $score1 / $maxScore1;
$acc1 = substr($acc1, 2);
$acc1 = substr($acc1, 0, -10);
$acc1 = substr_replace($acc1, $dot, $pos, 0);

$missed1 = $decoded_json1Top->playerScores[0]->score->missedNotes;
$bad1 = $decoded_json1Top->playerScores[0]->score->badCuts;
$fail1 = $missed1 + $bad1;
?> 

<div class="card">

<div class="cardPic">
<img src="<?php echo $pfp1 ?>" alt="">
</div>

<div class="name">
<a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
    <h2><a href="https://scoresaber.com/u/76561198403309456"target="_blank"><?php echo $decoded_json1->name; ?></a></h2>
</div>

<div class="ranks">
    <div class="global">
        <img src="bilder/global.png" alt="">
        <h4>#<?php echo $decoded_json1->rank; ?></h4>
    </div>

    <div class="local">
    <a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
        <h4>#<?php echo $decoded_json1->countryRank; ?></h4>
    </div>
</div>

<div class="pp">
    <h4><?php echo $decoded_json1->pp; ?>pp</h4>
</div>

<div class="topPlay">

<h3>Top Play</h3>

<div class="cover">
    <img src="<?php echo $cover1; ?>" alt="">
</div>

<h3><?php echo $decoded_json1Top->playerScores[0]->leaderboard->songName; ?></h3>
<p>By <?php echo $decoded_json1Top->playerScores[0]->leaderboard->songAuthorName; ?></p>
<p class="mapper"><?php echo $decoded_json1Top->playerScores[0]->leaderboard->levelAuthorName; ?></p>

<div class="scorepp">
<h4><?php echo $decoded_json1Top->playerScores[0]->score->pp; ?>pp</h4>
</div>

<div class="stat">
    <h5><?php echo $acc1; ?>%</h5>
    <h5><?php echo $fail1; ?> miss</h5>
</div>

</div>

</div>
<?php
//CRUSADER
$apiCrusader = "https://scoresaber.com/api/player/76561198162724018/full";
$apiCrusaderTop = "https://scoresaber.com/api/player/76561198162724018/scores";

$scApi2 = file_get_contents("$apiCrusader");
$decoded_json2 = json_decode($scApi2, false);

$scApi2Top = file_get_contents("$apiCrusaderTop");
$decoded_json2Top = json_decode($scApi2Top, false);

$pfp2 = $decoded_json2->profilePicture;  

$cover2 = $decoded_json2Top->playerScores[0]->leaderboard->coverImage;
$score2 = $decoded_json2Top->playerScores[0]->score->baseScore;
$maxScore2 = $decoded_json2Top->playerScores[0]->leaderboard->maxScore;
$acc2 = $score2 / $maxScore2;
$acc2 = substr($acc2, 2);
$acc2 = substr($acc2, 0, -10);
$acc2 = substr_replace($acc2, $dot, $pos, 0);

$missed2 = $decoded_json2Top->playerScores[0]->score->missedNotes;
$bad2 = $decoded_json2Top->playerScores[0]->score->badCuts;
$fail2 = $missed2 + $bad2;
?> 

<div class="card">

<div class="cardPic">
<img src="<?php echo $pfp2 ?>" alt="">
</div>

<div class="name">
<a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
    <h2><a href="https://scoresaber.com/u/76561198162724018"target="_blank"><?php echo $decoded_json2->name; ?></a></h2>
</div>

<div class="ranks">
    <div class="global">
        <img src="bilder/global.png" alt="">
        <h4>#<?php echo $decoded_json2->rank; ?></h4>
    </div>

    <div class="local">
    <a href="https://scoresaber.com/rankings?page=1&countries=se"target="_blank"><img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt=""></a>
        <h4>#<?php echo $decoded_json2->countryRank; ?></h4>
    </div>
</div>

<div class="pp">
    <h4><?php echo $decoded_json2->pp; ?>pp</h4>
</div>

<div class="topPlay">

<h3>Top Play</h3>

<div class="cover">
    <img src="<?php echo $cover2; ?>" alt="">
</div>

<h3><?php echo $decoded_json2Top->playerScores[0]->leaderboard->songName; ?></h3>
<p>By <?php echo $decoded_json2Top->playerScores[0]->leaderboard->songAuthorName; ?></p>
<p class="mapper"><?php echo $decoded_json2Top->playerScores[0]->leaderboard->levelAuthorName; ?></p>

<div class="scorepp">
<h4><?php echo $decoded_json2Top->playerScores[0]->score->pp; ?>pp</h4>
</div>

<div class="stat">
    <h5><?php echo $acc2; ?>%</h5>
    <h5><?php echo $fail2; ?> miss</h5>
</div>

</div>

</div>
<?php
//DOPE
$apiDope = "https://scoresaber.com/api/player/76561198130693166/full";
$apiDopeTop = "https://scoresaber.com/api/player/76561198130693166/scores";
$scApi3 = file_get_contents("$apiDope");
$decoded_json3 = json_decode($scApi3, false);

$scApi3Top = file_Get_contents("$apiDopeTop");
$decoded_json3Top = json_decode($scApi3Top, false);

$pfp3 = $decoded_json3->profilePicture; 

$cover3 = $decoded_json3Top->playerScores[0]->leaderboard->coverImage;
$score3 = $decoded_json3Top->playerScores[0]->score->baseScore;
$maxScore3 = $decoded_json3Top->playerScores[0]->leaderboard->maxScore;
$acc3 = $score3 / $maxScore3;
$acc3 = substr($acc3, 2);
$acc3 = substr($acc3, 0, -10);
$acc3 = substr_replace($acc3, $dot, $pos, 0);

$missed3 = $decoded_json3Top->playerScores[0]->score->missedNotes;
$bad3 = $decoded_json3Top->playerScores[0]->score->badCuts;
$fail3 = $missed3 + $bad3;
?>

<div class="card">

<div class="cardPic">
<img src="<?php echo $pfp3 ?>" alt="">
</div>

<div class="name">
    <img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt="">
    <h2><a href="https://scoresaber.com/u/76561198130693166"target="_blank"><?php echo $decoded_json3->name; ?></a></h2>
</div>

<div class="ranks">
    <div class="global">
        <img src="bilder/global.png" alt="">
        <h4>#<?php echo $decoded_json3->rank; ?></h4>
    </div>

    <div class="local">
        <img src="https://twemoji.maxcdn.com/v/13.1.0/svg/1f1f8-1f1ea.svg" alt="">
        <h4>#<?php echo $decoded_json3->countryRank; ?></h4>
    </div>
</div>

<div class="pp">
    <h4><?php echo $decoded_json3->pp; ?>pp</h4>
</div>

<div class="topPlay">

<h3>Top Play</h3>

<div class="cover">
    <img src="<?php echo $cover3; ?>" alt="">
</div>

<h3><?php echo $decoded_json3Top->playerScores[0]->leaderboard->songName; ?></h3>
<p>By <?php echo $decoded_json3Top->playerScores[0]->leaderboard->songAuthorName; ?></p>
<p class="mapper"><?php echo $decoded_json3Top->playerScores[0]->leaderboard->levelAuthorName; ?></p>

<div class="scorepp">
<h4><?php echo $decoded_json3Top->playerScores[0]->score->pp; ?>pp</h4>
</div>

<div class="stat">
    <h5><?php echo $acc3; ?>%</h5>
    <h5><?php echo $fail3; ?> miss</h5>
</div>

</div>

</div>

</body>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

*
{
    margin: 0;
    padding: 0;
}
body{
    
    color: #bbb;
    font-family: poppins;
    background: url(bilder/bsbg4.png) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
     background-size: cover;
}

header{
    background: rgba(0, 0, 0, 0.2);
    height: 100px;
    border-bottom: solid 1px #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: -1px 10px 35px 0px rgba(0,0,0,0.3);
    backdrop-filter: blur(10px);
}

header img{
    width: 90px;
    margin-left: 100px;
}

header h1{
    
    margin-right: 100px;
    color: #c9d5ff;
}

.everyone{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;

}

.card{
    padding: 2rem;
    border: solid 1px #fff;
    border-radius: 20px;
    width: 200px;
    background: rgba(0, 0, 0, 0.2);
    margin: 50px 10px;
    transition: 0.25s;
    backdrop-filter: blur(10px);
   
}
.cardPic{
    display:flex;
    justify-content: center;
    align-items: center;
}
.cardPic img{
    width: 150px;
    border-radius: 50%;
    background: #fff;
    padding: 1px;
}

.name{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    color: #c9d5ff;
}

.name img{
    width: 1.5rem;
    margin-right: 0.4em;
}

.name a{
    text-decoration: none;
    color: #c9d5ff;
}
.ranks{
    display: flex;
    align-items: center;
    justify-content: space-around;
    margin-top: 5px;
}
.global{
    display: flex;
    align-items: center;
}

.global img{
    width: 1.5rem;
    margin-bottom: 1px;
}

.global h4{
    margin-left: 0.4em;
    color: #c9d5ff;
}

.local{
    display: flex;
    align-items: center;
}

.local img{
    width: 1.5rem;
}

.local h4{
    margin-left: 0.4em;
    color: #c9d5ff;
}

.pp{
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    
}

.pp h4{
    background-color: #6b76da;
    padding: 5px 18px;
    border-radius: 20px;
    color: #fff;
}

.topPlay{
    margin-top: 10px;
}
.topPlay h3{
    margin-top: 10px;
    text-align: center;
    color: #c9d5ff;
}

.topPlay h3:first-child{
    padding: 10px;
    border-top: solid 1px gray;
    margin-top: 20px;
    border-radius: 10px;
}

.topPlay p{
    text-align: center;
    margin-top: 5px;
    color: #c9d5ff;
}

.topPlay p.mapper{
    font-size: 12px;
}

.scorepp{
    margin-top: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.scorepp h4{
    background-color: #6b76da;
    padding: 5px 18px;
    border-radius: 20px;
    color: #fff;
}
.cover{
    display: flex;
    justify-content: center;
    align-items: center;
}

.cover img{
    width: 100px;
    border-radius: 10%;
    background: #fff;
    padding: 1px;
    margin-top: 10px;
}

.stat{
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 5px;
}
.stat h5{
    background-color: #6b76da;
    padding: 5px 18px;
    border-radius: 20px;
    color: #fff;
    margin: 0 5px;
}

.nav-bar{
   
}
.nav-bar ul{
	display: flex;
    list-style: none;
}

.nav-bar ul li a{
	display: block;
	color: #fefefe;
	font-size: 20px;
	padding: 10px 25px;
	transition: 0.2s;
	margin: 0 5px;
    text-decoration: none;
    
}

.nav-bar ul li a:hover{
	text-decoration:underline;
	
}

</style>
