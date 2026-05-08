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
    <title>Learn Photography</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            text-align: center;
        }

        img {
            width: 500px;
            height: 300px;
            margin: 0 auto;
        }

        p {
            text-align: left;
            width: 1500px;
            margin: 0 auto;
        }

        #tabc {
            width: 300px;
            text-align: left;
            margin: 0 auto;

        }

        #tab {
            margin-top: 40px;
            margin-bottom: 0;
        }

        ul a {
            text-decoration: none;
            color: rgb(86, 29, 166)
        }

        ul a:hover {
            color: rgb(75, 3, 75);
            background-color: rgb(243, 211, 248);
        }

        .diff_img {
            height: 600px;
            width: 400px;

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
    <h2>What Camera Lens Should I Buy? A Guide for Beginner's Phototgraphy</h2>
    <img src="https://petapixel.com/assets/uploads/2023/08/camera-lens-featured-800x420.jpg">
    <p>
        Many photographers will say that your camera lens is as important (or even more important) than your camera
        body. All of the light that your camera body captures has to go through some sort of lens, which affects
        sharpness, distortion, amount of light, perspective, and many other variables.
        <br>Although your camera body is important and you may benefit from different features with different styles of
        photography, having the right lens is often key to making many great shots – regardless of what body you have.
        This guide will provide you with the information you will need to decide what camera lens(es) you should buy.
        Fair warning: lens acquisition can be addicting!


    </p>
    <h3 id="tab">Table of Contents</h3>

    <nav id="tabc">
        <ul>
            <li><a href="#sec1">What Is A Lens?</a></li>
            <li><a href="#sec2">Lens Characterization: Focal Length</a></li>
            <li><a href="#sec3">Lens Characterization: Aperture</a></li>
        </ul>
    </nav>

    <br><br>
    <!-- section 1 -->
    <h3 id="sec1">What Is A Lens?</h3>
    <p>
        First things first: what even are lenses, and why do photographers obsess over them? Lenses direct the light
        from the scene you want to capture toward the camera’s sensor. In film cameras, lenses direct light onto the
        film. Lenses are typically characterized by their focal length, in millimeters, and their aperture, in
        f-stops.<br>
        Today, many entry-level cameras are what we call “point-and-shoot” cameras. They usually have built-in,
        non-interchangeable lenses that can zoom. Although these have greatly improved in quality in the past decade,
        there are still limits to having a built-in lens that can’t be changed. On the other hand, DSLRs and mirrorless
        cameras dominate the professional market right now and usually allow photographers to change lenses depending on
        their situation. To find out if your camera’s lens can be changed, read its manual or search the internet.
    </p>
    <img class="diff_img" src="https://petapixel.com/assets/uploads/2023/08/12mm-sports-unconventional-534x800.jpg">
    <br> <label>A sports photo captured with a 12mm lens.</label>

    <br><br>

    <!-- section 2 -->
    <h3 id="sec2">Lens Characterization: Focal Length</h3>
    <p>
        In basic terms, the focal length of a lens is how “zoomed in” or “zoomed out” your lens can be. This is very
        important when deciding what lens to get. The actual measurement is in millimeters, and it is the distance
        between your lens’s optical center and your camera’s image sensor when the lens is focused.
    </p>
    <img src="https://petapixel.com/assets/uploads/2023/02/focal-length-definition-800x429.jpg"><br>
    <p>The higher the number, the more zoomed in your image will be. The lower the number, the more zoomed out your
        image will be. On a zoom lens, you’ll see focal length written as “##-##mm,” where the lower number is the most
        zoomed out and the higher number is the most zoomed-in focal length that a lens can achieve.

        For reference, if your eyes had a focal length, it would be somewhere around 20mm, which is fairly wide. On the
        other end of the spectrum, many sports and wildlife photographers that you’ll see with large lenses are using
        focal lengths somewhere around 300-800mm.</p>
    <img class="diff_img" src="https://petapixel.com/assets/uploads/2023/08/24-105mm-24mm-534x800.jpg"><br>
    <label>Captured with a 24-105mm lens at 24mm</label>
    <br><br>
    <img src="https://petapixel.com/assets/uploads/2023/08/24-105mm-50mm-800x534.jpg"><br>
    <label>Captured with a 24-105mm lens at 50mm.</label>
    <p>
        You can easily find lenses that go as wide as 18mm and zoom in to 300mm, but mechanical limitations mean that
        it’s less common to have a lens that “does it all” with great quality. Yes, 18-300mm lenses exist (and many
        combinations in-between), but they might be heavier, lower quality, more expensive, or perform worse in low
        light than other focal lengths.

        In the lens world, you’ll often hear people refer to “kit lenses.” These are usually less-expensive lenses that
        come with a camera body when you buy a kit. The most common kit lens is an 18-55mm lens, which goes from fairly
        wide to slightly zoomed in.<br>While many lenses zoom, some lenses don’t. These are called prime lenses, and
        they have a single, fixed focal length.
        <br><br>Prime lenses often have wider maximum apertures than zoom lenses, which will be discussed later in this
        article. They’re also sometimes lighter, more compact, and sharper because their components don’t need to move.
        They tend to have fewer mechanical errors because there are fewer moving parts. Their biggest downsides are that
        they don’t zoom in or out at all, so you might need to carry more than one lens to a shoot if you’re using any
        prime lenses.
    </p>
    <img src="https://petapixel.com/assets/uploads/2023/08/prime-vs-zoom-800x310.jpg">
    <br><label>A prime lens (left) has a simpler construction and does not feature a zoom ring, whereas a zoom lens
        (right) is generally larger and more complex and features a zoom ring.</label><br><br>

    <img class="diff_img" src="https://petapixel.com/assets/uploads/2023/08/nifty-fifty-portrait-534x800.jpg">
    <br><label>A portrait captured with a “nifty fifty” 50mm lens.</label>

    <br><br><br>
    <!-- section 3 -->
    <h3 id="sec3">Lens Characterization: Aperture</h3>
    <p>
        Aperture is an opening inside a lens that light travels through, and it’s another very important consideration
        when choosing a new lens. It can be wider and let more light through, or smaller and let less light through.
        Additionally, wider apertures create more of a blurry background (less depth of field). Some lens apertures can
        go wider than others, letting more light through and thus being easier to shoot with in dark environments. Some
        apertures are fixed, and can’t open and close. Either way, lenses are often more expensive if they have wider
        apertures – mostly because that requires more glass. If you want to learn more about what aperture actually does
        and how to use it, check out this guide.

        Lenses will most often be named with their focal length followed by their maximum aperture. Aperture is written
        in f-stops, and will look like “f/#.#.” Due to mechanics, some zoom lenses have variable maximum apertures.
        They’ll be written something like “f/#.#-#.#.” This denotes the maximum aperture that the lens can achieve at
        each end of its zoom range (zoomed out to zoomed in). For example, the most common kit lens mentioned above is
        an 18-55mm f/3.5-5.6 lens.

        To give you an idea of how much aperture affects lens cost, a used Canon EF 70-200mm f/2.8 L lens is somewhere
        around $600-800 in the current market, with obvious variations in age and quality. A used Canon EF 70-200mm
        f/4.0 L lens is somewhere around $300-400. The extra stop of light is worth double the price to many people.
        There are other considerations about lens sharpness and other features, but the aperture is the most important
        in this case.
    </p>

</body>