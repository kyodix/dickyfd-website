<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <nav>
            <input type="checkbox" id="nav" class="hidden">
            <label for="nav" class="nav-btn">
                <i></i>
                <i></i>
                <i></i>
            </label>
            <div class="logo">
                <a href="index.php?page=home">DICKY FD</a>
            </div>
            <div class="nav-wrapper">
                <ul>
                    <li><a href="index.php?page=home">HOME</a></li>
                    <li><a href="index.php?page=about">ABOUT</a></li>
                    <li><a href="index.php?page=my_work">MY WORK</a></li>
                    <li><a href="index.php?page=find_me">FIND ME</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "content/home.php";
				break;
			case 'about':
				include "content/about.php";
				break;
			case 'my_work':
				include "content/my_work.php";
                break;
            case 'find_me':
				include "content/find_me.php";
                break;
            case 'design':
				include "content/design.php";
                break;
            case 'video':
				include "content/video.php";
				break;
			case 'games':
				include "content/games.php";
				break;
			case 'music':
				include "content/music.php";
                break;
            case 'website':
				include "content/website.php";
                break;
            case 'application':
				include "content/application.php";
                break;		
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "content/home.php";
	}
 
	?>
    
    <div class="footer">
        <p><i>DICKY FD Website, Copyright <a href="loginaja">&copy</a> 2019</i></p>
    </div>
</body>
</html>