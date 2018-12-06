<?php include("header.html") ?>
    <link href='https://fonts.googleapis.com/css?family=Cabin+Sketch:700' rel='stylesheet' type='text/css'>

    <head>
        <style>
            .content {
                top: 50px;
                font-family: 'Teko', sans-serif;
                font-size: 30px;
            }
            
            p {
                margin: 0;
            }
            
            h1 {
                margin: 5;
            }
            
            h2 {
                margin: 0;
            }
            
            .slider {
                background-color: rgba(0, 102, 204, 0.5);
                width: 70%;
                border-radius: 30px;
                padding-left: 50px;
                padding-right: 50px;
                padding-bottom: 50px;
                padding-top: 10px;
            }
            
            .galleryHeader {
                color: #FFFFFF;
                width: 80%;
            }
            
            .galleryHeader td {
                background-color: #000000;
                font-size: 30px;
                border-radius: 30px;
                padding-left: 30px;
                padding-right: 30px;
                width: 25%;
                text-align: center;
                cursor: pointer;
            }
            
            .galleryHeader td:hover {
                background-color: #333333;
                text-decoration: underline;
            }
            
            .img_box {
                text-align: center; 
                font-size: 20px;
                margin: 5px;
                padding: 5px;
                border-style: solid;
                border-color: cadetblue;
                border-radius: 7px;
            }
        </style>
        <script>
            var projectHeaders = ["Harry Potter as an Escher Painting", "More Image Processing", "Life in 2113", "Snowflakes", "Vounteer Science"];

            function switchTo(pNum) {
                $("#titleName").html(projectHeaders[pNum]);
                for (var i = 0; i < 4; i++) {
                    if (i == pNum) {
                        $("#projectImg" + i).show();
                        $("#projectCaption" + i).show();
                    }
                    else {
                        $("#projectImg" + i).hide();
                        $("#projectCaption" + i).hide();
                    }
                }
            }
        </script>
    </head>

    <body>
        <div style="height:50px"></div>
        <div class="content" align="center">
            <h1 style="font-family: 'Cabin Sketch', cursive;">Project Gallery</h1>
            <div class="slider">
                <div style="padding:">
                    <table class="galleryHeader">
                        <tr>
                            <td onClick="switchTo(0)">Escher</td>
                            <td onClick="switchTo(1)">LR Codes</td>
                            <td onClick="switchTo(2)">2113</td>
                            <td onClick="switchTo(3)">Videos</td>
                            <td onClick="switchTo(4)">VS</td>
                        </tr>
                    </table>
                </div>
                <div id="sliderTitle">
                    <h2><span id="titleName">Harry Potter as an Escher Painting</h2></span>
                </div>
                <div class="sliderImage">
                    <div id="projectImg0">
                        <a target="_blank" href="projects/mosaic.png"><img src="projects/mosaic_small.png" /></a>
                    </div>
                    <div id="projectImg1"> </div>
                    <div id="projectImg2" style="display:none">
                        <a target="_blank" href="2114/future.html"><img src="projects/space_station_small.png" /></a>
                    </div>
                    <div id="projectImg3" style="display:none">
                        <div id="fb-root"></div>
                        <script>
                            (function (d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-video" data-allowfullscreen="1" data-href="/luke.horgan.986/videos/vb.100004751793485/564240937077628/?type=3">
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/luke.horgan.986/videos/564240937077628/">
                                    <a href="https://www.facebook.com/luke.horgan.986/videos/564240937077628/"></a>
                                    <p>I spent all night writing this song (and this software) and now I&#039;m going to melt! Enjoy the snow.</p>Posted by <a href="https://www.facebook.com/luke.horgan.986">Luke Horgan</a> on Monday, January 18, 2016</blockquote>
                            </div>
                        </div>
                    </div>
                    <div id="projectImg4" style="display:none">
                        <a target="_blank" href="https://volunteerscience.com"><img src="projects/vs_logo.png" /></a>
                    </div>
                </div>
                <div class="sliderCaption">
                    <p id="projectCaption0"> This was a birthday present for a friend. The full text of the first 25 chapters of Harry Potter and the Methods of Rationality by Eliezer Yudkowsky is encoded in the pattern using a custom scheme. To make the gift more fun, I printed it on a huge sheet of paper in super high resolution and wrote a special program to decode chunks of the image from actual photographs taken with a camera. </p>
                    <div id="projectCaption1" style="display:none; text-align:left">
                        <p> This is the sequel to the Escher project. I tried to identify the mistakes I made the first time around and fix them. This second version, which is nearly a complete rewrite, improves on V1 in a few important ways: </p>
                        <ol>
                            <li>Clearer: Each block of information is clearly marked with a bounding box. This reduces storage density somewhat, but substantially increases accuracy.</li>
                            <li>Faster: I am actively working to ensure the algorithm takes as few passes over the image as possible.</li>
                            <li>Smarter: The software picks out each information-encoding chunk and projects it onto a square instead of simply making a guess about its orientation.</li>
                            <li>Careful...er: Decoded data is compared against a checksum to verify its integrity.</li>
                        </ol>
                        <div class="img_box">
                            <div> <img src="projects/hills1small.bmp" /> <img src="projects/hills1smallt.bmp" />
                                <p>
                                    Output from program:<br />
                                    <code>checksum? 1635::1635<br />The hills are</code> 
                                </p>
                            </div>
                        </div>
                        <div class="img_box">
                            <div> <img src="projects/hills2small.bmp" /> <img src="projects/hills2smallt.bmp" /> <img src="projects/azile.bmp" />
                                <p>
                                    Output from program:<br />
                                    <code>checksum? 8708::1345<br />C6f-���J�>2d</code><br />
                                    ...Okay.  It didn't quite get this one, and I haven't figured out why yet.  You can see in the last image that it misidentified the corners of the bounding box, picking instead four points curiously nearby to where they really ought to be.  My guess is that I made a mistake in the code that projects the identified points back onto the image, a problem which should be easy enough to fix.
                                </p>
                            </div>
                        </div>
                        <div class="img_box">
                            <div> <img src="projects/hills3small.bmp" /> <img src="projects/hills3smallt.png" />
                                <p>
                                    Output from program:<br />
                                    <code>checksum? 1613::1613<br />the sound of</code> 
                                </p>
                            </div>
                        </div>
                        <div class="img_box">
                            <div> <img src="projects/hills4small.bmp" /> <img src="projects/hills4smallt.bmp" />
                                <p>
                                    Output from program:<br />
                                    <code>checksum? 1587::1587<br />music & peace</code> 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="projectCaption2" style="display:none"> This was a school project. I can't take credit for all the artwork, but I can take credit for all the coding. Parallax scrolling was the big buzzword floating around the net when I put this together, and I wanted to try my hand at something conceptually similar but visually quite different, hence the spinning globe. Follow the link by clicking the image and enjoy the silly little creative endeavor that follows, but be forewanred; it will play Edith Piaf's "La Vie en Rose," so turn down your speakers if you're in the office! </p>
                <p id="projectCaption3" style="display:none"> More a proof-of-concept than anything else, this quick video was an overnight project that I was inspired to do because the first winter snow was coming down. I composed the background music myself using using a program called MuseScore, and then I animated the dancing snowflakes by hooking LEDs to a couple of watch batteries and puppeteering them in the dark. I finished it up by writing a slick little C++ program to replace the dancing lights with dancing flakes of falling snow! </p>
                <p id="projectCaption4" style="display:none"> This one isn't really a personal project, but it is a professional effort that I've been a big part of for the past year and a half. The site is committed to revolutionizing research in social pyschology by making it easy to conduct complex experiments that would normally require a lab over the internet. As an active developer on the site, I have integrated countless new features, and I've also crafted a couple of experiments. </p>
            </div>
        </div>
        </p>
        </div>
    </body>
    <?php include("background.html") ?>