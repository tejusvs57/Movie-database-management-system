
<!DOCTYPE html>
<html>
     <head>
	 <meta charset="utf-8" />
	 <title>Movie Database</title>
	 <link rel="stylesheet" href="css/style.css" type="text/css" />
	  <link rel="stylesheet" href="css/table.css" type="text/css "/>
        <link rel="stylesheet" href="styles2.css">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	  <style>
	   a{
	
	text-decoration:none;
		
}
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}



/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color .6s ease;
}

.active {
  background-color: #717171;
}

      a{
        text-decoration: none;
        color: white;
      }
    
    @media only screen and (max-width: 940px){
        .menu-container{
            display: none;
        }
    }

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
	 <script type="text/javascript">
	     function active(){
			 var searchBar = document.getElementById('searchBar');
			 if(searchBar.value == 'Search a movie...'){
				 searchBar.value = ''
				 searchBar.placeholder='Search a movie...'
			 }
		 }
	 </script>
	 </head>
	     <body>
    
		 <div id="gradient"></div>
	         <header>
		       <h1 class = "neo" data-text="Movie Database"><a href="main.php">Movie Database</a></h1>
             </header></br>
             <div class="tab2">
                   <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <h1 class="logo"></h1>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <li><a>MOVIES</a>
                        <ul>
                         <li><a href="viewM.php">View all movies</a></li>
                         <li><a href="addM.php">Add a movie</a></li>
                        </ul>
                    </li>
                    <li><a>DIRECTOR</a>
                         <ul>
                         <li><a href="viewD.php">View all directors</a></li>
                         <li><a href="addD.php">Add a director</a></li>
                         </ul>
                    </li>
                    <li><a>ACTOR</a>
                         <ul>
                         <li><a href="viewA.php">View all actors</a></li>
                         <li><a href="addA.php">Add an actor</a></li>
                         </ul>
                    </li>
                    <li><a href="genre.php">GENRE</a></li>
                    <li><a href="sales.php">SALES</a></li>
                    <li><a href="log.php">LOGS</a></li>
                    
                </ul>
            </div>
           
               
            
            <div class="profile-container">
               <a href="Login & Registration Form/index.html"><img class="profile-picture" src="images/prof.jpg" alt=""></a> 
                <div class="profile-text-container">
                    <span class="profile-text">Profile</span>
                    <i class="fas fa-caret-down"></i>
                </div>
             
            </div>
        </div>
    </div>
			 </div>
		 	<form class="srch" method="POST" action="srch.php">
				<input name="search" type="text" id="searchBar" placeHolder="" value="Search a movie..." onMouseDown="active()"; /><input type="submit" name="submit" id="searchBtn" value="GO!"; />
			</form> 
			<br><br>
			<br><br>
			<br><br>
			

                  <div class="container">
        <div class="content-container">
           
            <div class="movie-list-container">
                <h1 class="movie-list-title-1">Top movies</h1>
                <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/K.G.F_Chapter_2.jpg" alt="">
                            <span class="movie-list-item-title">KGF 2</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=Qah9sSIXJqk&pp=ygUNa2dmIDIgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse1.mm.bing.net/th?id=OIP.wb8qN2cmt8MC4ewwfigWLQHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">3 Idiots</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=xvszmNXdM4w"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/Kantara_poster.jpeg" alt="">
                            <span class="movie-list-item-title">kantara</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=ppYoIoW73PI&pp=ygUQa2FuYXRhcmEgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/James_2022_poster.jpg" alt="">
                            <span class="movie-list-item-title">james</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=TPmBdjplUtY&pp=ygUNamFtZXMgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/777_Charlie_official_poster.jpg" alt="">
                            <span class="movie-list-item-title">777 charlie</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=REqFOV2A7sI&pp=ygUTNzc3IGNoYXJsaWUgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/Kurukshetra_(2019_film)_poster.jpg" alt="">
                            <span class="movie-list-item-title">Kurukshetra</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=hKsEh1NPY48&pp=ygUTa3VydWtzaGV0cmEgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/K.G.F_Chapter_1_poster.jpg" alt="">
                            <span class="movie-list-item-title">kgf1</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=qXgF-iJ_ezE"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/MM-02.jpg" alt="">
                            <span class="movie-list-item-title">Mungaru male</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <!-- <a href=""><button class="movie-list-item-button">watch trailer </button></a> -->
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>

                    </div>
            </div>

            <div class="movie-list-container">
            <h1 class="movie-list-title-1">Hollywood</h1>
            <div class="movie-list-wrapper">
            <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP.6WmVvsREOPsTtqTlYi5wOwHaD5&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Fast X</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=32RAq6JzY-w"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse2.mm.bing.net/th?id=OIP.s6qnJ-HzQvjThekdVSj2vgHaEo&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Titanic</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=ZQ6klONCq4s"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP.B3a51W-vuzt05msMWpKYuQHaFj&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Rush hour</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=JMiFsFQcFLE"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse3.mm.bing.net/th?id=OIP.25TIXBlMwzWNBRHED84TDgHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Avatar</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=5PSNL1qE6VY"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse2.mm.bing.net/th?id=OIP.57CPXk4G-3MPIHzwnQ8tAAHaGX&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Jurassic Park</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=lc0UehYemQA"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP.eMZEc1Hd9mWFPvWEeV-9dwHaEI&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=eOrNdBpGMv8"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP._DMXDlqROjsYyMbYVoQhTQHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Joker</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=zAGVQLHvwOY"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP.dAOTZZVyYOPj0B2cRKXztgHaFj&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Sherlock Holmes</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=J7nJksXDBWc"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                        </div>
                         <i class="fas fa-chevron-right arrow"></i> 
                    </div>
                   </div>

                   <div class="movie-list-container">
            <h1 class="movie-list-title-1">Bollywood</h1>
            <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://media-cache.cinematerial.com/p/500x/3g3w1jes/bang-bang-indian-movie-poster.jpg?v=1456356529" alt="">
                            <span class="movie-list-item-title">Bang Bang</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=NhIFVlsHzwQ"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse3.mm.bing.net/th?id=OIP.DOahFP5VKeZB00V_P_LDmAHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">3 idiots</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=xvszmNXdM4w"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse1.mm.bing.net/th?id=OIP.z0ic0ymaCMG9FNqLXTcUxwHaEW&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Sholay</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=u2pJU82Xj9M"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse2.mm.bing.net/th?id=OIP.Xg8L2WQ4mpzrixTWmYEwAAHaFj&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Taare Zameen Par</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=tn_2Ie_jtX8"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse1.mm.bing.net/th?id=OIP.rL9Mwf0NIS1qvEuXvbsfJwHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">War</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=tQ0mzXRk-oM"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse4.mm.bing.net/th?id=OIP.SBD9Be2mKMWCkns4EzKJqAHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Pathaan</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=vqu4z34wENw"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://secure-media.hotstar.com/r1/thumbs/ANDROID/77/1000071777/ANDROID-1000071777-hm_tab_xxhdpi.jpg" alt="">
                            <span class="movie-list-item-title">Bajrangi bhaijaan</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=4nwAra0mz_Q"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse2.mm.bing.net/th?id=OIP.8j3woPP8fimnerawaWgqGAHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Chhichhore</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=tsxemFX0a7k"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                    </div>
                    </div>
                    <div class="movie-list-container">
            <h1 class="movie-list-title-1">Sandalwood</h1>
            <div class="movie-list-wrapper">
                    <div class="movie-list">
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="images/kannada/K.G.F_Chapter_2.jpg" alt="">
                            <span class="movie-list-item-title">KGF 2</span>
                            <!-- <p class="movie-list-item-desc".></p> -->
                            <a href="https://www.youtube.com/watch?v=Qah9sSIXJqk&pp=ygUNa2dmIDIgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="images/kannada/777_Charlie_official_poster.jpg" alt="">
                            <span class="movie-list-item-title">777 charlie</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=REqFOV2A7sI&pp=ygUTNzc3IGNoYXJsaWUgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="images/kannada/Kantara_poster.jpeg" alt="">
                            <span class="movie-list-item-title">kantara</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=ppYoIoW73PI&pp=ygUQa2FuYXRhcmEgdHJhaWxlcg%3D%3D"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="images/kannada/K.G.F_Chapter_1_poster.jpg" alt="">
                            <span class="movie-list-item-title">kgf1</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=qXgF-iJ_ezE"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse3.mm.bing.net/th?id=OIP.rPZ_o8ko0au9A-sOZMEr4gHaFS&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Badava Rascal</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=L94o_eim518"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse3.mm.bing.net/th?id=OIP.fQgApdAfPIZItVC_e5UTmQHaFB&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Pogaru</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=KJMjE0igb3I"><button class="movie-list-item-button">watch trailer </button></a>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse1.mm.bing.net/th?id=OIP.dOxtLXDiBZxQDkJ5MmX43QHaEK&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Yuvaratna</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=a1L1EviALUg"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="https://tse2.mm.bing.net/th?id=OIP.qNdik2Qo5omnQozJ4VRP0wHaEX&pid=Api&P=0&h=180" alt="">
                            <span class="movie-list-item-title">Vikrant Rona</span>
                            <!-- <p class="movie-list-item-desc"></p> -->
                            <a href="https://www.youtube.com/watch?v=-0ldvhBlL-k"><button class="movie-list-item-button">watch trailer </button></a>
                            <!-- <button class="movie-list-item-button">about</button> -->
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                    </div>
                    </div>

        </div>
    </div>
    
    

<script>
const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (5 + clickCounter) + (5 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${
        movieLists[i].computedStyleMap().get("transform")[0].x.value - 300
      }px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

</script>
    </body>
</html>

