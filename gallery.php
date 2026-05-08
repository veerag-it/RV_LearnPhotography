<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <style>
        .gallery-title {
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 2.5em;
            margin: 20px 0;
            font-family: 'Verdana', sans-serif;
            font-size: larger;
            background: linear-gradient(90deg, #bdbae5, #3203ce);
            padding:10px;
            box-shadow: black 0px 0px 10px;
        }



        #portrait-gallery img {
            width: 300px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #portrait-gallery img:hover {
            transform: scale(2.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        #landscape-gallery img {
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #landscape-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        #street-gallery img {
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #street-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }

        #wildlife-gallery img {
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #wildlife-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        #long-exposure-gallery img{
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #long-exposure-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        #event-gallery img{
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #event-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
            #food-gallery img{
            width: 600px;
            height: 400px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        #food-gallery img:hover {
            transform: scale(2.0);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        </style>
</head>
<body>
    <!-- header of index page -->
    <header>
        <h1>Learn Photography</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="course.php">Courses</a>
            <a href="gallery.php">Gallery</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
         
        </nav>
    </header>
    <div>
        <h2 class="gallery-title">Portrait Photography</h2>
        <div class="gallery" id="portrait-gallery">
            <img src="https://img.gqkorea.co.kr/gq/2023/11/style_6567f9be621d5.jpg">
            <img src="https://photosfile.com/wp-content/uploads/2022/09/Jennifer-Winget-Images-4.jpg">
            <img src="https://cdn.tatlerasia.com/asiatatler/i/sg/2021/05/15100240-kim-so-yeon-in-the-penthouse-3_cover_650x973.jpg">
            <img src="https://i.pinimg.com/1200x/29/04/77/2904778d39dee7088bcd96704a5f4bf6.jpg">
            <img src="https://i.pinimg.com/originals/9a/80/f0/9a80f08ccbb62c5b473562c1606e71a2.jpg">
            <img src="https://i.pinimg.com/736x/cf/f8/80/cff88094c0a71858efaa28122a10b4f0.jpg">
            <img src="https://photosfile.com/wp-content/uploads/2022/09/Yash-Photos-2.jpg">
    </div><br><br> <br><br><br><br>
    <div>
        <h2 class="gallery-title">Landscape Photography</h2>
        <div class="gallery" id="landscape-gallery">
            <img src="https://photographylife.com/wp-content/uploads/2017/01/Landscape-photography-example.jpg">
            <!-- <img src="https://www.superprof.com/blog/wp-content/uploads/2018/02/landscape-photography-tutorials.jpg"> -->
            <img src="https://fashionphotographersmumbai.com/blog/wp-content/uploads/2019/01/Landscape-Photograhy-768x512.jpg">
            <img src="https://fashionphotographersmumbai.com/blog/wp-content/uploads/2019/01/Use-of-Lighting-768x480.jpg">
            <img src="https://fashionphotographersmumbai.com/blog/wp-content/uploads/2019/01/Rule-of-Thirds.jpg">
            <img src="https://images.squarespace-cdn.com/content/v1/5eff70892eeeef0e0ffb0af9/10dbcb26-b28f-43f3-8924-a6048709351c/083A9848+2.jpg?format=2500w">
            <img src="https://i.pinimg.com/originals/04/27/45/042745b5b92ff821d197766b422e4383.jpg">
        </div><br><br><br><br><br><br>
    </div>
    <div>
        <h2 class="gallery-title">Street Photography</h2>
        <div class="gallery" id="street-gallery">
            <img src="https://121clicks.com/wp-content/uploads/2011/12/indian_street_photography_01.jpg">
            <img src="https://1.bp.blogspot.com/-0v9OXe94Tz8/VfgHgjE3H4I/AAAAAAABxKQ/glnynV4H6FI/s1600/IMG_7572-1.jpg">
            <img src="https://images.pexels.com/photos/548084/pexels-photo-548084.jpeg?cs=srgb&dl=city-road-people-548084.jpg&fm=jpg">
            <img src="https://images.squarespace-cdn.com/content/v1/5de2dfd398e1587c635b3505/45cb9c63-a2d1-48d2-934c-26ba86f045ea/Rome+street+photography.jpg">
            <img src="https://alexandra-tandy.com/wp-content/uploads/2022/06/alexandra-tandy-photography-touching-a-sign.jpg">
            <img src="https://images.pexels.com/photos/2422588/pexels-photo-2422588.jpeg?auto=compress&cs=tinysrgb&dpr=1&fit=crop&h=700&w=1200">
        </div><br><br><br><br><br><br>
    </div>
    <div>
        <h2 class="gallery-title">Wildlife Photography</h2>
        <div class="gallery" id="wildlife-gallery">
            <img src="https://wallpaperaccess.com/full/2251377.jpg">
            <img src="https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/8/2023/05/CLI406.wildlife_photography_awards.SleepingWithDandelionsLewisNewmanBritishWildlifePhotographyAwards-1920x1443.jpg">
            <img src="https://www.nhm.ac.uk/resources/visit/wpy/2023/medium/873a6a4a-56c9-40eb-9982-e62ea2903310.jpg">
            <img src="https://www.nhm.ac.uk/resources/visit/wpy/2023/medium/ff1313d2-bc16-4ad1-91e2-cef4d90d5a9f.jpg">
            <img src="https://keyassets.timeincuk.net/inspirewp/live/wp-content/uploads/sites/8/2019/10/%C2%A9-Audun-Rikardsen-Wildlife-Photographer-of-the-Year.jpg">
            <img src="https://i.natgeofe.com/n/942f0947-1a5b-4085-a8a8-a51db22c2b4f/01-wildlife-awards-yongqing-bao---wildlife-photographer-of-the-year.jpg">
            <img src="https://www.creativehut.org/wp-content/uploads/2020/06/best-birds-wildlife-photography.jpg">
            <img src="https://iso.500px.com/wp-content/uploads/2014/07/20482.jpg">
        </div><br><br><br><br><br> <br>
    </div>
    <div>
        <h2 class="gallery-title"> Long Exposure Photography</h2>
        <div class="gallery" id="long-exposure-gallery">
           <img src="https://th.bing.com/th/id/R.51e60029f94512acdfa50cbb59a8a1b2?rik=3UjZQsWRj%2bEwQA&riu=http%3a%2f%2fstatic.boredpanda.com%2fblog%2fwp-content%2fuploads%2f2017%2f08%2flong-exposure-1-598b031b6967e__880.jpg&ehk=rMBikHXvT7Aak8OrsiXIOk7gxxKkvBm0ndrRfYytrjw%3d&risl=&pid=ImgRaw&r=0">
           <img src="https://expertphotography.com/wp-content/uploads/2020/02/long-exposure-light-trail.jpg">
           <img src="https://th.bing.com/th/id/R.0293592c79abaf83869bd161816bccb4?rik=NGHqRsnCl%2bSYQw&riu=http%3a%2f%2fimages.says.com%2fuploads%2fstory_source%2fsource_image%2f396012%2f13eb.jpg&ehk=ctmWgIkatBlKFAUb1jzrPz0IhPQq75TmTMMbPzYN4GQ%3d&risl=&pid=ImgRaw&r=0">
           <img src="https://i.pinimg.com/736x/0c/f8/0a/0cf80af548902ba678f9ece86e6c9668.jpg">
           <img src="https://static-cse.canva.com/image/128107/long-exposure-photography.jpg">
           <img src="https://i.pinimg.com/originals/78/98/69/789869a94eca87a7769af75b06c6f440.jpg">
        </div><br><br><br><br><br><br>
    </div>
    <div>
        <h2 class="gallery-title">Event Photography</h2>
        <div class="gallery" id="event-gallery">
            <img src="https://live.staticflickr.com/6238/6324873807_5fdc444680_b.jpg">
            <img src="https://th.bing.com/th/id/R.f3445cc97d815cb20c19ef9ffb159c8f?rik=IAFdgU%2fEcIU3UA&riu=http%3a%2f%2fnishantratnakar.com%2fwp-content%2fuploads%2f2011%2f08%2fSandyNidhi-476.jpg&ehk=HLc4UGTpCd2YWecwrpHJAqx1bdiJeDekS65wYj0rNQc%3d&risl=&pid=ImgRaw&r=0">
            <img src="https://www.theweddingshades.com/wp-content/uploads/2019/04/01-Sanna-Nabil-wedding.jpg">
            <img src="https://www.victoriacarlsonphotography.com/wp-content/uploads/2020/01/Skyliner-Lodge-Mt-Bachelor-Village-Boho-Bend-Wedding-0016-2000x1333.jpg">
            <img src="https://hmgplus.com/wp-content/uploads/2021/09/Header-Photo-1080x675.jpg">
            <img src="https://bangalorephotographers.in/images/gallery/Photographers-for-Birthday-party.jpg">
            </div><br><br><br><br><br><br>
    </div>
    <div>
        <h2 class="gallery-title">Food Photography</h2>
        <div class="gallery" id="food-gallery">
            <img src="https://blog.sigmaphoto.com/wp-content/uploads/2019/07/cropped-pancakes-scaled.jpg">
            <img src="https://webneel.com/wnet/file/images/3-17/2-dosa-indian-food-photography-by-shirish-sen.jpg">
            <img src="https://www.thekidneydietitian.org/wp-content/uploads/2020/11/bowl-of-saag-paneer-2048x1363.jpg">
            <img src="https://peppertreats.com/wp-content/uploads/2019/11/5dd6bacaae045.png">
            <img src="https://wallpaperaccess.com/full/9378456.jpg">
            <img src="https://feeds.abplive.com/onecms/images/uploaded-images/2023/10/11/fa6be68d80b1f9676ece11173a8b6ded1697004727372557_original.jpg">
            <img src="https://foodhistoria.com/wp-content/uploads/2023/03/maxresdefault-30.jpg">
        </div><br><br><br><br><br><br>
    </div>
</body>
</html> 