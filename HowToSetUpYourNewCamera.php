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

    <!-- body of content -->
    <h2>How to Set Up Your New Camera: A Checklist</h2>
    <img src="https://petapixel.com/assets/uploads/2022/01/How-to-set-up-new-digital-camera-main-image-800x420.jpg">
    <p>Getting a new digital camera is an exciting time for photographers and videographers. A world of possibilities
        and learning lies ahead as well as doors to new adventures and places to visit. But it’s not always smooth
        sailing when it comes to using a new camera as a beginner. There are lots of complex numbers, letters, and
        acronyms to wrap your head around, let alone figuring out how to operate the numerous dials, buttons, and
        switches. But by following the simple steps included in this checklist you should be up and running in no
        time.<br><br>We’ll go through the basics of how to power on the camera, dial in time/ date/location settings,
        get it attached to the tripod, and take a look through the shooting modes and exposure settings for both stills
        and video capture. Let’s jump right in and get this new camera booted.</p><br><br>

    <h3 id="tab">Table of Contents</h3>
    <nav id="tabc">
        <ul>
            <li><a href="#sec1">Charge the Battery</a></li>
            <li><a href="#sec2">Format the Memory Card</a></li>
            <li><a href="#sec3">Attach a Lens</a></li>
            <li><a href="#sec4">Select Image Quality</a></li>
            <li><a href="#sec5">Choose the Autofocusing Mode</a></li>
            <li><a href="#sec6">Your New Camera is Ready to Shoot</a></li>
        </ul>
    </nav><br><br>
    <!-- section 1 -->
    <h3 id="sec1">Charge the Battery</h3>
    <p>
        Cameras will have battery and card slot ports located underneath concealing flaps that latch and unlatch to
        reveal the port. Not sure where it is on your camera? Look in the manual.<br>Most new cameras will come with a
        battery that is partly charged so it’ll work straight out of the box, but it’s best to charge the battery fully
        before using it. The reason for this is that rechargeable batteries for digital cameras come with lithium-ion
        (Li-ion) batteries. They have a limited lifecycle and so are limited by the number of times they can be
        recharged before failing to hold charge sufficiently. Topping up the battery, rather than letting it drain to
        empty also helps to preserve the battery condition over time, which may result in better longevity. Charging the
        battery fully will also give more time to play with the camera.
    </p><br><br>
    <!-- section 2 -->
    <h3 id="sec2">Format the Memory Card</h3>
    <img src="https://petapixel.com/assets/uploads/2022/01/1.Battery-and-memory-card-800x450.jpg">
    <p>Memory cards store photos and videos taken with the camera. Be sure to put this in before taking photos or videos
        so that they’re saved.<br>It’s a good idea to format the card inside the camera before use, even if it’s a brand
        new memory card. That way, the card will be empty and any proprietary subfoldering can be created by the camera
        for optimum storage.

        If the card has been used before, make sure that all data is backed up before formatting, as this will wipe any
        information on the card.</p>
    <br><br><br>
    <!-- section 3 -->
    <h3 id="sec3">Attach a Lens</h3>
    <img src="https://i.pinimg.com/originals/89/22/5a/89225ac6fcc5bd8351e369a0d6ae73bb.jpg">
    <p>
        Lenses and camera bodies each have a marker to indicate proper alignment to install a lens. Line these markers
        up and twist in the appropriate direction to fit the lens to the camera. Markers may be different colors and in
        different locations depending on the make and model of the cameras — Nikon’s markers are white, for example,
        while Canon’s are red.<br>

        The lenses also twist to mount in different directions based on make, too, and it should always feel easy to
        attach. If any moderate to strong force has to be applied to mount the lens, it’s either because it’s: being
        twisted in the wrong direction (likely), has a faulty lens mount (unlikely), or has a faulty camera body mount
        (unlikely).
        <br>Lenses only have a few in-built controls but checking what they’re set to before shooting is important. A
        focus ring allows photographers to manually adjust the focus by turning it and often there’s a distance marker
        on the lens barrel (though not always). Zoom lenses also have a zoom ring that spins to adjust the focal length.

        There are also sometimes switches or buttons on the side of lenses to change between autofocus and manual focus,
        engage or disengage image stabilization, and choose between different stabilization types.

        If your camera is not autofocusing on subjects targeted by autofocus points, make sure your lens’s focus switch
        is set to AF (autofocus) rather than MF (manual focus).
        <br>
        When it comes to stabilization, it’s useful to keep this on when shooting handheld, but switch it off when
        mounting the camera to a tripod. That’s because the stabilization system can cause tiny vibrations when on a
        tripod and introduce camera shake blur during longer exposures. Though, some lenses are sophisticated enough to
        identify when they’re on a tripod and automatically switch off IS, so check the manual before operating.
    </p><br><br><br>

    <!-- section 4 -->
    <h3 id="sec4">Select Image Quality</h3>
    <img src="https://i.ytimg.com/vi/n0tmYCYXHIA/maxresdefault.jpg">
    <p>
        There are three main types of still image files: JPEG, TIFF, and RAW. Each has its own benefits and drawbacks,
        but it essentially comes down to how much original data they store and, therefore, how detailed the image is and
        how much flexibility the photographer has during editing.<br><br>

        To start, JPEG stores the least data as it compresses stills to save space, and it is the most common type of
        image file format. Next, TIFF stores more data and is often uncompressed, but file sizes are much larger. RAW
        files store the most data and are the largest in file size — it contains minimally processed data direct from
        the camera’s image sensor.
        <br><br>
        The larger the file, the more data there is, and the more flexible the image is when editing. RAW is the ideal
        format to shoot in because it can be edited much more flexibly, allowing for exposure, color, and tone changes
        without distorting the image.
        <br>
        JPEGs and TIFFs are useful to save space, (which isn’t really an issue anymore) but also to output straight for
        sharing/publication. Common modern uses for these two file formats might be a photojournalist who is sending
        images to a media desk straight from the camera, as they shoot, and beginners who want to share images without
        processing shots first.
        <br>
        In almost all other situations though, RAW files are the best way to make the most out of photos, but editing
        software compatible with opening these files is required.
    </p>
    <br><br><br><br>
    <!-- section 5 -->
    <h3 id="sec5">Choose Autofocusing Mode</h3>
    <img
        src="https://artistichive.com/wp-content/uploads/2024/02/pca-still-life-light-painting-exercise-light-paint-page-02_900256a0e99c4948a5a63ead15966d73.jpeg">

    <p>
        Autofocusing (AF) is the camera’s way to automatically attain focus based on where the AF point lies in the
        frame. It can either operate as single-shot focus, AKA one-shot focus (once focus is attained it will stay in
        place until the photo is taken), or continuous (focus adjusts on the AF point continuously until the image is
        taken). Single-shot focus is useful for static subjects, like a portrait sitting, or a building, whereas
        continuous autofocus may be helpful for tracking focus on a moving subject like a pet or a vehicle.<br>
        It’s also possible to change the size of the AF point, with common options including spot, multi-point, group,
        and zones. Modern cameras also have eye, face, animal, and subject detection to intelligently track focus even
        while the subject or camera is moving. Choose the most appropriate setting for each shooting situation.
    </p><br><br><br>

    <!-- section 6 -->
    <h3 id="sec6">Your New Camera is Ready to Shoot</h3>
    <p>This guide should cover the most basic requirements to get your new camera up and running. When you’re ready to
        take it one step further, attempt to start using manual settings such as aperture, shutter speed, and ISO, or
        consider changing the white balance to suit the shooting environment. Metering can be changed, but only advanced
        photographers really need to alter this because exposure can be manipulated through the use of aperture, shutter
        speed, and ISO sensitivity.</p>

</body>