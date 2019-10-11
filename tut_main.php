<!DOCTYPE html>
<!-- This is a declaration to tell the browser which version of HTML the page is using -->

<html lang="en">
<!-- This is the start of my code-->

<!-- This is the head of the code. In here I can change the title and link other files to my page-->

<head>
    <!--This is the text that will appear on the tab in the browser-->
    <title>Process. IT.</title>


    <!--CONNECTING MY HTML FILE WITH OTHER CSS FILES-->
    <!--I'm resetting the browser styles-->
    <link href="css/reset.css" rel="stylesheet">

    <!--I'm importing nicer type-->
    <link href="css/text.css" rel="stylesheet">

    <!--linking 960 stylesheet-->
    <link href="css/960.css" rel="stylesheet">

    <!-- linking the stylesheet -->
    <link href="css/tut_main.css" rel="stylesheet">

    <!--CONNECTING GOOGLE FONTS-->
    <!--Im connecting Google fonts here with the weight of the font as 400 light and 900 for bold-->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Yeseva+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,900,300,300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet' type='text/css'>
</head>
<!--This is the end of the head-->

<!--This is the body where all of the content is-->

<body>

    <!--The PHO for comments section which-->
    <?php
        if ($_POST)
            {
                $servername = "daneel";
                $username = "N00152627";
                $password = "N00152627";
                $dbname = "n00152627playground";
                $users_name = $_POST['username'];
                $users_comment = $_POST['comment']; 
                $users_name = str_replace("'", "''", "$users_name");
                $users_comment = str_replace("'", "''", "$users_comment");

                // Create connection to the DB
                $conn = new mysqli($servername, $username, $password,$dbname);

                // Check connection was created successfully
                if ($conn->connect_error) 
                {
                    die("Connection failed: " . $conn->connect_error);
                } 




                // SQL to create a table
                $sql =   "INSERT INTO comments (username, comment) VALUES ('$users_name','$users_comment');";


                //Check that the SQL command ran correctly
                if ($conn->multi_query($sql) === TRUE) {
                } 
                else 
                {
                    echo "Error inputting data: " . $conn->error;

                }

                //Close the connection to the DB
                $conn->close();
            }
                  ?>


        <!-- The div is like a container which I will style using CSS -->
        <!--The class is a name assigned to this container in which I will be able to style-->
        <div class="wrapper_main">
            <!--The container using the 12 collumn grid which is connected to the 960 stylesheet-->
            <div class="container_12 main">

                <div class="triangle">

                    <p id="game">GAME</p>

                    <img class="hand" src="images/hand.png" alt="hand" />

                    <div class="navigation">
                        <!--This is the navigation class where all the links go-->

                        <!--Unordered List element which is used to create the navigational links-->

                        <ul>
                            <!-- a href will link to other html documents creating a navigation system-->
                            <li id="home"><a id="nav" href="index.html">Home</a></li>
                            <li id="tutorials"><a id="nav" href="tutorials.html">Tutorials</a></li>
                            <li id="about"><a id="nav" href="about.html">About</a></li>
                            <li id="users"><a id="nav" href="users.html">Users</a></li>
                            <!--This is the end of the lists-->
                        </ul>

                        <!--This is the end of the navigation div-->
                    </div>
                </div>

                <!--Im creating another div in order to be able to move around the attributes together-->
                <div class="logo grid_3">

                    <!--This is a JavaScript document which Im stating here and which connects to the document outlined in "src"-->
                    <script src="js/date.js "></script>

                    <!--This will be my h1 text-->
                    <h1> Process. </h1>
                    <!--This will be my h2 text-->
                    <h2>IT.</h2>

                    <!--This is the end of the logo div-->
                </div>

                <!--This is a div which is used for decoration to create a triangle for the logo-->
                <div class="small_rectangle"></div>

                <div class="grid_9">

                    <p id="title">Combination Game</p>
                    <p id="published">Published by: Erika Volodko</p>
                    <p id="date">15 / 03 / 2016</p>

                    <hr />

                </div>

                <!--This is the slideshow container-->
                <div class="grid_12">
                    <div id="contentContainer">
                        <div id="wrapper">
                            <div id="itemOne" class="content">

                                <!--The first window of the slideshow-->
                                <p id="slide_start">Please wait till the slideshow fully loads
                                    <br />and then use circle steps <ins>in order</ins>
                                    <br /> from left to right to start.</p>

                                <!--This is the animation of a runner in a circle-->
                                <div class="circle">
                                    <div class="runner"> </div>
                                </div>

                            </div>

                            <!--Second Slideshow-->
                            <div id="itemTwo" class="content">

                                <div class="step_1"><font id="step_1_title">Step 1</font>
                                    <br />Open up <i><acronym title="If you don't have this application you can look at the resources section to get the link">processing application</acronym></i>.
                                    <br /> Go to <b>file</b> at the top left corner
                                    <br /> and select <ins>save as</ins>.
                                    <br />
                                    <br />Save on your desktop as "<font id="game_text">game</font>".
                                    <br />This will create a folder on your
                                    <br /> desktop by that file name.</div>
                                <img src="images/step_1.png" id="img1" />

                            </div>

                            <!--Third Slideshow-->
                            <div id="itemThree" class="content">
                                <div class="step_1"><font id="step_2_title">Step 2</font>
                                    <br />Open up the folder in desktop
                                    <br /> and <ins>right click</ins>.
                                    <br /> Select "<b>New</b>" and then "<b>Folder</b>".
                                    <br />
                                    <br />This will be our <font id="images_fonts">images and fonts</font>.
                                    <br />Once you've done that, open up
                                    <br /> the game file that's there.
                                    <br />
                                    <br /><font id="note">Note:</font> <i>Download the files below<br /> to put into the data folder.</i></div>

                                <img src="images/step_2.png" id="img2" />

                            </div>

                            <!--Fourth Slideshow-->
                            <div id="itemFour" class="content">
                                <div class="step_1"><font id="step_3_title">Step 3</font>
                                    <br />Once you did the previous steps,
                                    <br /> you need to create your <b>game<br />  skeleton</b>. We can do that
                                    <br /> by creating <acronym title="A data element which is referenced with a name. Every variable has a value, data type and scope.">variables</acronym>.
                                    <br />
                                    <br />Create the <acronym title="This will give us the opportunity to have multiple screens like in a normal game">scene change</acronym> variable.
                                    <br />Let's call it "<b id="currentScreen">currentScreen</b>".
                                    <br />
                                    <br />
                                    </b>Now we need to create a <acronym title="A loop is a piece of block code which will run constantly until stopped.">loop</acronym>.</div>

                                <img src="images/step_3.png" id="img3" />
                            </div>

                            <!--Fifth Slideshow-->
                            <div id="itemFive" class="content">
                                <div class="step_1"><font id="step_4_title">Step 4</font>
                                    <br />Create a <acronym id="acronym2" title="This code block runs in a loop until stopped or the application is exited. It can only be used once.">draw()</acronym> loop for the scenes to
                                    <br /> change when we have a <acronym id="acronym2" title="A command in this sense is when user clicks on the mouse or presses the keyboard"> command</acronym>.
                                    <br />
                                    <br /> Add a <acronym id="acronym2" title="This will enable the currentScreen variable to switch when a command is made">switch</acronym> to the currentScreen
                                    <br /> variable. In the <b>switch()</b> structure,
                                    <br /> <acronym id="acronym2" title="Case is a label for different switch statements">Cases </acronym>and <acronym id="acronym2" title="We let the program know that we are finished with a specific case label by using 'break' at the end ">breaks</acronym> will let you
                                    <br />label scenes.
                                    <br />
                                    <br /> Create a scene <acronym id="acronym2" title="A name will be used to recall this code later on">title</acronym> in each case.
                                    <br /><font id="note"></div>
                
                <img src="images/step_4.png" id="img4" />
            </div>
            
                                <!--Sixth Slideshow-->
            <div id="itemSix" class="content">
                <div class="step_1"><font id="step_5_title">Step 5</font>
                                    <br />In order to <b>re-call</b> cases and draw
                                    <br />loop later on in the code, use <acronym title="Keyword used indicate that a function returns no value.">void</acronym>
                                    <br /> and the case <b>title</b> followed after
                                    <br /> with a loop.
                                    <br />
                                    <br />Now we need to add the <acronym title="Setup() will only run once once the program starts. Its used to define screen size and load fonts, images and etc.">setup()</acronym> loop
                                    <br />to initialize the canvas and finish
                                    <br />the game skeleton.</b>
                                </div>

                                <img src="images/step_5.png" id="img5" />
                            </div>

                            <!--Seventh Slideshow-->
                            <div id="itemSeven" class="content">
                                <div class="step_1"><font id="step_6_title">Step 6</font>
                                    <br />Last step to finishing the skeleton
                                    <br /> of the game is to add the main
                                    <br /> <b>image</b> and <b>font</b> variables.
                                    <br />
                                    <br />We also need to <acronym id="acronym2" title="Defining the canvas size will create a window in which our images will be. The canvas is set the exact same size as the background image.">define</acronym> our
                                    <br />canvas settings in setup().
                                    <br />
                                    <br /><b>Copy</b> the code as outlined, then
                                    <br/> <acronym id="acronym2" title="Using this command the program will load images and other files from our 'data' folder">load</acronym> image variables and fonts
                                    <br /> in the setup loop. </div>

                                <img src="images/step_6.png" id="img6" />
                            </div>

                            <!--Eight Slideshow-->
                            <div id="itemEight" class="content">
                                <div class="step_1"><font id="step_7_title">Step 7</font>
                                    <br />Now that the main structure is done,
                                    <br /> we can start adding <acronym title="All the variables we declared previously">content</acronym> to
                                    <br /> our <b>scenes</b> made previously.
                                    <br />
                                    <br /> All we need to do is, tell
                                    <br />the application to <b>recall</b>
                                    <br /> the variables that we used
                                    <br /> in setup().
                                    <br />
                                    <br />This is our "<b id="start_screen">Start</b>" screen. </div>

                                <img src="images/step_7.png" id="img7" />
                            </div>

                            <!--Nineth Slideshow-->
                            <div id="itemNine" class="content">
                                <div class="step_1"><font id="step_8_title">Step 8</font>
                                    <br />Click the <acronym id="acronym2" title="Run is the circular button on the top left corner of the application with an arrow in it">Run</acronym> button to see how
                                    <br />the <b>start</b> looks so far.
                                    <br />We need to create <b>interactivity</b>,
                                    <br /> between the scenes.
                                    <br />To do so, use <acronym id="acronym2" title="This function is used to run the block code when a user presses a key. This key is stored in the 'key' function ">keyPressed()</acronym>.
                                    <br />We will use an <acronym id="acronym2" title="Gives the program a command to execute a loop block code if a certain condition is true">if</acronym> loop to determine
                                    <br /> which <b>key</b> needs to be pressed
                                    <br /> in order for the currentScreen
                                    <br />variable to <b>change and switch</b>
                                    <br /> to a different case.</div>

                                <img src="images/step_8.png" id="img8" />
                            </div>

                            <!--Tenth Slideshow-->
                            <div id="itemTen" class="content">
                                <div class="step_1"><font id="step_9_title" "#step_9_jump_back">Step 9</font>
                                    <br />Now we need to create <b>instructions</b>
                                    <br /> of the game in the next screen.
                                    <br />
                                    <br /> By using fonts and the image
                                    <br /> <b>variables</b> declared previously,
                                    <br /> all we need to do is position
                                    <br />them the way we want and.
                                    <br />
                                    <br /> <a id="step_9_click" href="#step_9_jump">Click here to get the full code.</a></div>

                                <img src="images/step_9.png" id="img9" />
                            </div>

                            <!--Eleventh Slideshow-->
                            <div id="itemEleven" class="content">
                                <div class="step_1"><font id="step_10_title">Step 10</font>
                                    <br />For the <b>main game</b>, some sort of
                                    <br />animation is needed. Which is why
                                    <br /> using an <acronym id="acronym2" title="This is a list of data which is identified by an index number. It starts from 0 and and then counts up.">array</acronym> is a good choice.
                                    <br />
                                    <br />Create new variables above your
                                    <br /> main code, and then declare
                                    <br /> <acronym id="acronym2" title="Datatype to store images, it needs to be loaded before initialized">PImage </acronym>array like on the left.
                                    <br />Create a <acronym id="acronym2" title="This will speed up or slow down the animation">frameRate</acronym> for your
                                    <br /> animation, and then a <acronym id="acronym2" title="This controls the sequence of repetitions so that the animation runs smoothly">for</acronym> loop
                                    <br /> to have it running.</div>

                                <img src="images/step_10.png" id="img10" />
                            </div>

                            <!--Twelveth Slideshow-->
                            <div id="itemTwelve" class="content">
                                <div class="step_1"><font id="step_11_title">Step 11</font>
                                    <br /> Most of the <b>structure</b> variables are
                                    <br /> set up, now we need to <b>add</b> the
                                    <br />arrays we declared to our scenes.
                                    <br /> Copy the code on the left or
                                    <br />
                                    <br /><a id="step_11_click" href="#step_11_jump">Click here to get the code.</a>
                                    <br />
                                    <br />We will use the <b>image function once</b>
                                    <br /> again to recall our array <b>png  files</b>
                                    <br /> and position them. </div>

                                <img src="images/step_11.png" id="img11" />
                            </div>

                            <!--Thirteenth Slideshow-->
                            <div id="itemThirteen" class="content">
                                <div class="step_1"><font id="step_12_title">Step 12</font>
                                    <br />It's time to create our <b>potions</b>.
                                    <br />In the game the user will need
                                    <br />to click <b>two ingredients</b> to create
                                    <br />the actual potions.
                                    <br />When they choose their ingredient,
                                    <br /> it will <b>disappear.</b> To do that we
                                    <br /> will use a <acronym id="acronym2" title="This is a true or false data type, so when a certain condition is met and the boolean is either set to true or false, the outcome will depend. In this case when potions are set to false, they will disappear.">boolean</acronym> data type.
                                    <br />
                                    <br />Declare the variables like on the
                                    <br />left and <b>load</b> them in setup().</div>

                                <img src="images/step_12.png" id="img12" />
                            </div>

                            <!--Fourteenth Slideshow-->
                            <div id="itemFourteen" class="content">
                                <div class="step_1"><font id="step_13_title">Step 13</font>
                                    <br />Go back to <b>currentScreenTwo()</b>
                                    <br /> code and add in the <b>if</b> loop
                                    <br />statements for each
                                    <br />of the ingridients and their position
                                    <br /> on the <b>x and y</b> axis.
                                    <br />
                                    <br />Run the code to see if it works.
                                    <br />
                                    <br /><a id="step_13_click" href="#step_13_jump">Click here to get the code so far.</a></div>

                                <img src="images/step_13.png" id="img13" />
                            </div>

                            <!--Fifteenth Slideshow-->
                            <div id="itemFifteen" class="content">
                                <div class="step_1"><font id="step_14_title">Step 14</font>
                                    <br />Now we need to create our
                                    <br /> <b id="combinations_b">Combinations</b> for the ingredients.
                                    <br /> Go back to the code start.
                                    <br />Add the combination variables and
                                    <br />add <b>images</b> for the different
                                    <br />outcomes. We will use all the
                                    <br />images that are in the <b>data folder</b>.
                                    <br /> You may have noticed we're using
                                    <br /> <acronym title="Int is a numerical data type which can only store numbers">int</acronym> data type for <ins>numeral values</ins>. This
                                    <br /> is the best data type to use.
                                    <br />
                                </div>

                                <img src="images/step_14.png" id="img14" />
                            </div>

                            <!--Sixteenth Slideshow-->
                            <div id="itemSixteen" class="content">
                                <div class="step_1"><font id="step_15_title">Step 15</font>
                                    <br />Once you have your <b>combinations</b>
                                    <br />ready, and declared the image
                                    <br /> variables, recall the variables
                                    <br /> in setup().
                                    <br />
                                    <br /><a id="step_15_click" href="#step_15_jump">Click here to get the code so far.</a>
                                    <br />
                                    <br />We can now start creating the
                                    <br />screen changes and game itself.</div>

                                <img src="images/step_15.png" id="img15" />
                            </div>

                            <!--Seventeenth Slideshow-->
                            <div id="itemSeventeen" class="content">
                                <div class="step_1"><font id="step_16_title">Step 16</font>
                                    <br />Let's finish the design
                                    <br />of our scences.
                                    <br />
                                    <br/>Go back to <b>drawScreenThree()</b>
                                    <br />and repeat the same process as
                                    <br />for <b>drawScreenTwo()</b>.
                                    <br />
                                    <br /> Add arrays, images and fonts.</div>

                                <img src="images/step_16.png" id="img16" />
                            </div>

                            <!--Eighteenth Slideshow-->
                            <div id="itemEighteen" class="content">
                                <div class="step_1"><font id="step_17_title">Step 17</font>
                                    <br />The last part to this section
                                    <br />is to add in content to
                                    <br /> <b>drawScreenFour() </b>scene.
                                    <br />
                                    <br />Once again, add in arrays,
                                    <br />images and fonts.</div>

                                <img src="images/step_17.png" id="img17" />
                            </div>

                            <!--Nineteenth Slideshow-->
                            <div id="itemNineteen" class="content">
                                <div class="step_1"><font id="step_18_title">Step 18</font>
                                    <br />This section will cover the combination
                                    <br />variables that we declared.
                                    <br />
                                    <br />Go to <b id="currentScreenThree">currentScreenThree()</b> scene
                                    <br />and create <b>if</b> statements with the
                                    <br />combinations on the left.
                                    <br />
                                    <br />Then after each statement, recall
                                    <br />our result potions (<b>endpotion</b>) and
                                    <br />position them on <b>x and y</b> axis.</div>

                                <img src="images/step_18.png" id="img18" />
                            </div>

                            <!-- Slideshow Twenty-->
                            <div id="itemTwenty" class="content">
                                <div class="step_1"><font id="step_19_title">Step 19</font>
                                    <br />Now we need to create bad potion
                                    <br /> combination results.
                                    <br />
                                    <br />These are the creatures that the
                                    <br />character will turn into if the
                                    <br /> ingredient combination was wrong.
                                    <br />Go to <b id="currentScreenFour">currentScreenFour()</b>
                                    <br /> scene and add the following
                                    <br />code on the left.</div>

                                <img src="images/step_19.png" id="img19" />
                            </div>

                            <!-- Slideshow Twenty One-->
                            <div id="itemTwentyOne" class="content">
                                <div class="step_1"><font id="step_20_title">Step 20</font>
                                    <br />We will use combinations for
                                    <br /><acronym id="acronym2" title="Interactivity can be when the user presses a key like in keyPressed function mentioned earlier or in this case the 'mousePressed' option">interactivity</acronym> using <acronym id="acronym2" title="This will let the program know that when a user clicks something , in this case the co-ordinates outlined, a scene will change">mousePressed()</acronym>
                                    <br /> function.
                                    <br />
                                    <br />When our <b>currentScreen</b> is equal
                                    <br /> to 2, and the user clicks along the
                                    <br /><b>x and y</b> co-ordinates like on the left,
                                    <br />the combination variable will <b><acronym id="acronym2" title="When it will store the value and the user will click witihin the co-ordinates declared in the if statement, the scene will change.">store</acronym></b>
                                    <br />the new value.</div>

                                <img src="images/step_20.png" id="img20" />
                            </div>

                            <!-- Slideshow Twenty Two-->
                            <div id="itemTwentyTwo" class="content">
                                <div class="step_1"><font id="step_21_title">Step 21</font>
                                    <br />Now we need to add the second
                                    <br /> row of ingredients to our
                                    <br />combination <b>mousePressed()</b>
                                    <br />function.
                                    <br />
                                    <br /> Use the same method as in
                                    <br /> the previous step. </div>

                                <img src="images/step_21.png" id="img21" />
                            </div>

                            <!-- Slideshow Twenty Three-->
                            <div id="itemTwentyThree" class="content">
                                <div class="step_1"><font id="step_22_title">Step 22</font>
                                    <br />Using the combination variable
                                    <br /> results from the user , depending
                                    <br /> on where they click, and creating
                                    <br /><b>scene changes</b>.
                                    <br />The code on the left shows
                                    <br /> the layout of the loop.
                                    <br /> The combination values are shown
                                    <br />in red. This code needs to be
                                    <br />inside the <b> mousePressed()</b> loop.</div>

                                <img src="images/step_22.png" id="img22" />
                            </div>

                            <!-- Slideshow Twenty Four-->
                            <div id="itemTwentyFour" class="content">
                                <div class="step_1"><font id="step_23_title">Step 23</font>
                                    <br />Last step in this section is
                                    <br /> to allow the proper scene
                                    <br /> change when user clicks on the
                                    <br /><b>finished potion</b>. We will use
                                    <br />another <b>if</b> loop like the
                                    <br />code on the left.
                                    <br />
                                    <br /><a id="step_23_click" href="#step_23_jump">Click here to get the full code.</a></div>

                                <img src="images/step_23.png" id="img23" />
                            </div>

                            <!-- Slideshow Twenty Five-->
                            <div id="itemTwentyFive" class="content">
                                <div class="step_1"><font id="step_24_title">Step 24</font>
                                    <br />Declare a "<b id="lives">lives</b>" variable at
                                    <br />the start of the code. Then recall
                                    <br /> it in <b>drawScreenTwo()</b>.
                                    <br/>
                                    <br />When lives will be equal to zero,
                                    <br />the game will end.
                                    <br />
                                    <br />We are setting the lives to <b>Four</b>
                                    <br />so that the user has a chance
                                    <br />to guess the right potion.</div>

                                <img src="images/step_24.png" id="img24" />
                            </div>

                            <!-- Slideshow Twenty  Six-->
                            <div id="itemTwentySix" class="content">
                                <div class="step_1"><font id="step_25_title">Step 25</font>
                                    <br />Add the newly created <b>lives</b> variable
                                    <br /> to end of <b>drawScreenThree()</b>
                                    <br />code and <b>drawScreenFour</b> like
                                    <br />outlined on the left.
                                    <br />
                                    <br /><a id="step_25_click" href="#step_25_jump">Click here to get the code.</a>
                                    <br /> </div>

                                <img src="images/step_25.png" id="img25" />
                            </div>

                            <!-- Slideshow Twenty Seven-->
                            <div id="itemTwentySeven" class="content">
                                <div class="step_1"><font id="step_26_title">Step 26</font>
                                    <br />The last part to this section is
                                    <br />to add in <b id="lives_b">lives--;</b> code in the
                                    <br />combinations we have at the
                                    <br />end of the code.
                                    <br />
                                    <br />This will enable a lives <b>system</b>,
                                    <br />where the user will lose
                                    <br /> a life once the combination
                                    <br />of the ingredients they chose
                                    <br />was wrong. </div>

                                <img src="images/step_26.png" id="img26" />
                            </div>

                            <!-- Slideshow Twenty Eight-->
                            <div id="itemTwentyEight" class="content">
                                <div class="step_1"><font id="step_27_title">Step 27</font>
                                    <br />In this section we will be adding
                                    <br /> the different potion results that
                                    <br />are <b>successful</b>. There are only <b>three</b>.
                                    <br />
                                    <br />Copy the code in the link below or
                                    <br />create your own text.
                                    <br />
                                    <br /> <a id="step_27_click" href="#step_27_jump">Click here to get the code.</a></div>

                                <img src="images/step_27.png" id="img27" />
                            </div>

                            <!-- Slideshow Twenty nine-->
                            <div id="itemTwentyNine" class="content">
                                <div class="step_1"><font id="step_28_title">Step 28</font>
                                    <br />Add a similar code to the
                                    <br /> second <b>end()</b> result.
                                    <br />
                                    <br />This is will replace the first image.
                                    <br />
                                    <br />Copy the code in the link below or
                                    <br />create your own text.
                                    <br />
                                    <br /> <a id="step_28_click" href="#step_28_jump">Click here to get the code.</a></div>

                                <img src="images/step_28.png" id="img28" />
                            </div>

                            <!-- Slideshow Thirty-->
                            <div id="itemThirty" class="content">
                                <div class="step_1"><font id="step_29_title">Step 29</font>
                                    <br />Add the last end result code
                                    <br /> with the similar code as before.
                                    <br />
                                    <br />This is will replace the second image.
                                    <br />
                                    <br />Copy the code in the link below or
                                    <br />create your own text.
                                    <br />
                                    <br /> <a id="step_29_click" href="#step_29_jump">Click here to get the code.</a></div>

                                <img src="images/step_29.png" id="img28" />
                            </div>

                            <!-- Slideshow Thirty One-->
                            <div id="itemThirtyOne" class="content">
                                <div class="step_1"><font id="step_30_title">Step 30</font>
                                    <br />In order to have sound, we need
                                    <br /> to <acronym id="acronym2" title="we will import data from other sites or tools in processing in order to have more features, in this case sound.">import</acronym> a music library.
                                    <br />
                                    <br />Go to "<b>Tools</b>" and then "<b>Add Tools...</b>"
                                    <br />Type in <b>minim</b> and select
                                    <br />and download the library.
                                    <br />
                                </div>

                                <img src="images/step_30.png" id="img30" />
                            </div>

                            <!-- Slideshow Thirty Two-->-->
                            <div id="itemThirtyTwo" class="content">
                                <div class="step_1"><font id="step_31_title">Step 31</font>
                                    <br />Now all you need to do is
                                    <br />to declare the <b>input</b> before
                                    <br />all of your code and recall it,
                                    <br />in setup().
                                    <br />
                                    <br />
                                    </b>You can now use
                                    <br />the code in any part
                                    <br /> of the game
                                    <br />
                                </div>

                                <img src="images/step_31.png" id="img31" />
                            </div>


                            <!-- Slideshow Thirty Three-->
                            <div id="itemThirtyThree" class="content">
                                <div class="step_1"><font id="step_32_title">Step 32</font>
                                    <br />You need to <acronym id="acronym2" title="This will let the program move more smoothly and allow some features to work better">reset</acronym> some variables
                                    <br /> in order for the others
                                    <br />to move smooth.
                                    <br />
                                    <br /> We declared a reset variable back
                                    <br /> when we declared <b>keyPressed()</b>.
                                    <br /> All you need to do now is go into
                                    <br />the <b>reset()</b> code block you made
                                    <br />at the end and type in the
                                    <br />code on the left. </div>

                                <img src="images/step_32.png" id="img32" />
                            </div>

                            <!-- Slideshow Thirty Four LAST SLIDESHOW-->
                            <div id="itemThirtyFour" class="content">
                                <div class="step_1"><font id="step_33_title">Step 33</font>
                                    <br /><b>Final Step</b> is to create the ending
                                    <br />screen. It's almost the same
                                    <br /> as the starting screen
                                    <br />however you need to change
                                    <br />the text.
                                    <br />
                                    <br /> This is all for
                                    <br /> this tutorial, make sure to
                                    <br /> check the code below!</div>

                                <img src="images/step_33.png" id="img33" />
                            </div>

                        </div>
                    </div>


                    <!--This is the bulletpoints of the slideshow, data position is 770px added constantly for each slide fram-->
                    <div id="navLinks">

                        <ul>
                            <p id="slide_1">Structure</p>
                            <li class="itemLinks" data-pos="0px"></li>
                            <li class="itemLinks" data-pos="-770px"></li>
                            <li class="itemLinks" data-pos="-1540px"></li>
                            <li class="itemLinks" data-pos="-2310px"></li>
                            <li class="itemLinks" data-pos="-3080px"></li>
                            <li class="itemLinks" data-pos="-3850px"></li>
                            <li class="itemLinks" data-pos="-4620px"></li>
                            <li class="itemLinks" data-pos="-5390px"></li>
                            <li class="itemLinks" data-pos="-6160px"></li>
                            <li class="itemLinks" data-pos="-6930px"></li>
                            <li class="itemLinks" data-pos="-7700px"></li>

                        </ul>



                        <ul>
                            <p id="slide_2">Game</p>
                            <li class="itemLinks" data-pos="-8470px"></li>
                            <li class="itemLinks" data-pos="-9240px"></li>
                            <li class="itemLinks" data-pos="-10010px"></li>
                            <li class="itemLinks" data-pos="-10780px"></li>
                            <li class="itemLinks" data-pos="-11550px"></li>
                            <li class="itemLinks" data-pos="-12320px"></li>
                            <li class="itemLinks" data-pos="-13090px"></li>

                        </ul>

                        <ul>
                            <p id="slide_3">Combine</p>

                            <li class="itemLinks" data-pos="-13860px"></li>
                            <li class="itemLinks" data-pos="-14630px"></li>
                            <li class="itemLinks" data-pos="-15400px"></li>
                            <li class="itemLinks" data-pos="-16170px"></li>
                            <li class="itemLinks" data-pos="-16940px"></li>
                            <li class="itemLinks" data-pos="-17710px"></li>

                        </ul>

                        <ul>
                            <p id="slide_4">Lives</p>

                            <li class="itemLinks" data-pos="-18480px"></li>
                            <li class="itemLinks" data-pos="-19250px"></li>
                            <li class="itemLinks" data-pos="-20020px"></li>

                        </ul>


                        <ul>
                            <p id="slide_5">End</p>

                            <li class="itemLinks" data-pos="-20790px"></li>
                            <li class="itemLinks" data-pos="-21560px"></li>
                            <li class="itemLinks" data-pos="-22330px"></li>

                        </ul>

                        <ul>
                            <p id="slide_6">Sound</p>

                            <li class="itemLinks" data-pos="-23100px"></li>
                            <li class="itemLinks" data-pos="-23870px"></li>

                        </ul>


                        <ul>
                            <p id="slide_7">Finish</p>

                            <li class="itemLinks" data-pos="-24640px"></li>
                            <li class="itemLinks" data-pos="-25410px"></li>

                        </ul>


                    </div>

                    <script src="//www.kirupa.com/html5/examples/js/prefixfree.min.js"></script>/
                    <!--In case the browser does not support the slideshow-->

                    <!--This is the script for the changing of slides-->
                    <script src="js/structure.js "></script>

                </div>

                <hr id="hr2">

                <!--THIS CODE WAS COPIED AS HTML IN PROCESSING AND THEN PLACED INTO MY OWN CODE HERE-->
                <p id="code_title">CODE</p>

                <div class="code grid_10">
                    <p id="code_text">Simplified Game Skeleton</p><pre>
<span style="color: #666666;">//Screen&nbsp;change&nbsp;variable&nbsp;declared</span>
<span style="color: #E2661A;">int</span> currentScreen;                                <span style="color: #666666;">//Variable to create the different scenes(screens) for interaction</span>
<span style="color: #666666;">//Font&nbsp;Variables&nbsp;declared</span>
<span style="color: #E2661A;">PFont</span> font, font2;                           <span style="color: #666666;">//Declare PFont variable</span>


<span style="color: #666666;">//&nbsp;setup()&nbsp;function&nbsp;only&nbsp;runs&nbsp;once</span>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>setup</b></span>() {                                                  <span style="color: #666666;">//Start of setup loop   </span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//&nbsp;draw()&nbsp;loops&nbsp;forever,&nbsp;until&nbsp;stopped</span>

<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>draw</b></span>() {                        <span style="color: #666666;">//Start of draw loop</span>
&nbsp;&nbsp;<span style="color: #669900;">switch</span>(currentScreen) {            <span style="color: #666666;">//Controls the jumps to different screens in this case the integer which is currentScreen</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 0:                            <span style="color: #666666;">//Cases are the value of currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenZero();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the first currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 1:                            <span style="color: #666666;">//currentScreen is now 1 </span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenOne();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the second currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 2:                            <span style="color: #666666;">//currentScreen is now 2</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenTwo();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the third currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()                </span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 3:                            <span style="color: #666666;">//currentScreen is now 3</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenThree();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the fourth currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 4:                            <span style="color: #666666;">//currentScreen is now 4</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenFour();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the fifth currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 5:                            <span style="color: #666666;">//currentScreen is now 5</span>
&nbsp;&nbsp;&nbsp;&nbsp;end1();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 6:                            <span style="color: #666666;">//currentScreen is now 6</span>
&nbsp;&nbsp;&nbsp;&nbsp;end2();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the second end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 7:                            <span style="color: #666666;">//currentScreen is now 7</span>
&nbsp;&nbsp;&nbsp;&nbsp;end3();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the third end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 8:                            <span style="color: #666666;">//If the currentScreen is now 8 that means its the end of the game</span>
&nbsp;&nbsp;&nbsp;&nbsp;endOfGame();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the last screen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;0&nbsp;</span>
<span style="color: #33997E;">void</span> drawScreenZero() {
&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;1</span>
<span style="color: #33997E;">void</span> drawScreenOne() {
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;2</span>
<span style="color: #33997E;">void</span> drawScreenTwo() {
&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;3</span>
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;4</span>
<span style="color: #33997E;">void</span> drawScreenFour() {
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;5</span>
<span style="color: #33997E;">void</span> end1 () {
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop{//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;6</span>
<span style="color: #33997E;">void</span> end2 () {
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;7</span>
<span style="color: #33997E;">void</span> end3 () {
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop{//The&nbsp;reset&nbsp;variable&nbsp;which&nbsp;is&nbsp;recalled&nbsp;in&nbsp;the&nbsp;if&nbsp;keyPressed&nbsp;statement&nbsp;</span>
<span style="color: #33997E;">void</span> reset() {
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//END&nbsp;OF&nbsp;GAME</span>
<span style="color: #33997E;">void</span> endOfGame(){
&nbsp;&nbsp;}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

</pre></div>

                <div class="code2 grid_10">
                    <p id="code2_text">All Variables</p><pre>
<span style="color: #666666;">//Audio</span>
Minim&nbsp;minim;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Sound player variable</span>
AudioPlayer&nbsp;song,&nbsp;water,&nbsp;bubbling,&nbsp;wand,&nbsp;slurp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Audio song variable names</span>
<span style="color: #E2661A;">boolean</span> playing= <span style="color: #33997E;">false</span>;                           <span style="color: #666666;">//Boolean to show the song is playing</span>
<span style="color: #E2661A;">String</span> soundeffect = <span style="color: #7D4793;">&quot;bubbling.mp3&quot;</span>;              <span style="color: #666666;">//Loading a music file </span>
<span style="color: #E2661A;">String</span> soundeffect2 = <span style="color: #7D4793;">&quot;wand.mp3&quot;</span>;                 <span style="color: #666666;">//Loading a music file </span>
<span style="color: #E2661A;">String</span> soundeffect3 = <span style="color: #7D4793;">&quot;slurp.mp3&quot;</span>;                <span style="color: #666666;">//Loading a music file </span>
AudioPlayer[]&nbsp;player&nbsp;=&nbsp;<span style="color: #33997E;">new</span> AudioPlayer[1];        <span style="color: #666666;">//Creating a player array so the song plays in a loop</span>
AudioPlayer[]&nbsp;player2&nbsp;=&nbsp;<span style="color: #33997E;">new</span> AudioPlayer[1];       <span style="color: #666666;">//Creating a player array so the song plays in a loop</span>

<span style="color: #666666;">//Screen&nbsp;change&nbsp;variable&nbsp;declared</span>
<span style="color: #E2661A;">int</span> currentScreen;                                <span style="color: #666666;">//Variable to create the different scenes(screens) for interaction</span>

<span style="color: #666666;">//Image&nbsp;variables&nbsp;declared</span>
<span style="color: #E2661A;">PImage</span> start, background, paper, book, copy, speechbubble, frog, dementor, werewolf, 
&nbsp;&nbsp;griffin,&nbsp;hat,&nbsp;witch,&nbsp;dobby,&nbsp;rat,&nbsp;voldemort,&nbsp;owl,&nbsp;snitch,&nbsp;goodpotion1,&nbsp;goodpotion2,&nbsp;goodpotion3,&nbsp;
&nbsp;&nbsp;endpotion1,&nbsp;endpotion2,&nbsp;endpotion3,&nbsp;endpotion4,&nbsp;endpotion5,&nbsp;endpotion6,&nbsp;endpotion7,&nbsp;
&nbsp;&nbsp;endpotion8,&nbsp;endpotion9,&nbsp;endpotion10,&nbsp;endpotion11,&nbsp;endpotion12,&nbsp;endpotion13,&nbsp;
&nbsp;&nbsp;endpotion14,&nbsp;endpotion15;

<span style="color: #666666;">//Font&nbsp;Variables&nbsp;declared</span>
<span style="color: #E2661A;">PFont</span> font, font2;                           <span style="color: #666666;">//Declare PFont variable</span>

<span style="color: #666666;">//&nbsp;Variables&nbsp;for&nbsp;animation&nbsp;</span>
<span style="color: #E2661A;">int</span> numFrames = 2;                           <span style="color: #666666;">//The number of frames in the animation </span>
<span style="color: #E2661A;">int</span> frame = 0;                               <span style="color: #666666;">//Frame variable which will be used to distinguish the pace of the animation </span>
<span style="color: #E2661A;">PImage</span>[] room = <span style="color: #33997E;">new</span> <span style="color: #E2661A;">PImage</span>[numFrames];       <span style="color: #666666;">//Image array for the cauldron animation</span>
<span style="color: #E2661A;">PImage</span>[] snape = <span style="color: #33997E;">new</span> <span style="color: #E2661A;">PImage</span>[numFrames];      <span style="color: #666666;">//Image array for Snape blinking</span>

<span style="color: #666666;">//Potions</span>
<span style="color: #E2661A;">boolean</span> showImage = <span style="color: #33997E;">true</span>;                   <span style="color: #666666;">//The ingredient potions appearing is true but will disappear once set to &quot;false&quot;</span>
<span style="color: #E2661A;">boolean</span> showImage2 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage3 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage4 = <span style="color: #33997E;">true</span>;                  
<span style="color: #E2661A;">boolean</span> showImage5 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage6 = <span style="color: #33997E;">true</span>;                  

<span style="color: #E2661A;">int</span> combination1 = 0;                       <span style="color: #666666;">//Combination integers which is used to create a mixture for 2 potions</span>
<span style="color: #E2661A;">int</span> combination2 = 0;                       
<span style="color: #E2661A;">int</span> combination3 = 0;                      
<span style="color: #E2661A;">int</span> combination4 = 0;                   
<span style="color: #E2661A;">int</span> combination5 = 0;                       
<span style="color: #E2661A;">int</span> combination6 = 0;                       

<span style="color: #E2661A;">PImage</span> potion1, potion2, potion3,           <span style="color: #666666;">//Creating variables for the potions images</span>
&nbsp;&nbsp;potion4,&nbsp;potion5,&nbsp;potion6;
&nbsp;&nbsp;
<span style="color: #E2661A;">int</span> lives = 4;                              <span style="color: #666666;">//Lives will start at 4</span>

</pre></div>

                <div class="code3 grid_10">
                    <p id="code3_text">Interactivity + Combinations</p><pre>
<span style="color: #666666;">//If&nbsp;the&nbsp;key&nbsp;is&nbsp;pressed&nbsp;this&nbsp;fuction&nbsp;will&nbsp;activate&nbsp;in&nbsp;a&nbsp;loop</span>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>keyPressed</b></span>() {                                                                                               

&nbsp;&nbsp;<span style="color: #669900;">if</span> (<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 0 ||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 1) {              <span style="color: #666666;">//If Spacebar is pressed and currentScreen is 0 OR 1 </span>
&nbsp;&nbsp;&nbsp;&nbsp;currentScreen++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Then currentScreen will add 1 and move on to the next currentScreen </span>
&nbsp;&nbsp;}

&nbsp;&nbsp;<span style="color: #669900;">if</span> (<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 4 ||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 5                 <span style="color: #666666;">//If Spacebar is pressed and currentScreen is 4 OR 5 OR 6 OR 7 </span>
&nbsp;&nbsp;||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 6 || <span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 7 ) {
&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//then it will go back to screen 2</span>
&nbsp;&nbsp;&nbsp;&nbsp;reset();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//And reset variable will activate</span>
&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;
}&nbsp;
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>mousePressed</b></span>() {                        

&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 3 and the mouse is pressed is in the accordinates below then </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (currentScreen == 3 ) {
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 610 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 750) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 90 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 450)) { 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//the currentScreen changes to 4 </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                            <span style="color: #666666;">//and playing is false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slurp=minim.loadFile(soundeffect3);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slurp.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 4 and the combinations are equal to numbers outlined before then the currentScreen will be re-directed </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ( currentScreen == 4) {
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Directing the the right combination</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10) currentScreen = 5;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11) currentScreen = 7;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7) currentScreen = 6;
&nbsp;&nbsp;}

&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 2 the images will dissapear based on the co-ordinates that were clicked. The music will also play and combination variables will be assigned a number </span>
&nbsp;&nbsp;<span style="color: #666666;">//which will give us the ability to use them when creating the different images to appear s</span>
&nbsp;&nbsp;<span style="color: #666666;">//ROW 1//</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (currentScreen == 2) {                                                   <span style="color: #666666;">//If current screen is equal to 2 </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 80 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage&nbsp;=&nbsp;!showImage;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination1&nbsp;=&nbsp;1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage2&nbsp;=&nbsp;!showImage2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination2&nbsp;=&nbsp;2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage3&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination3&nbsp;=&nbsp;3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//ROW2//</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage4&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination4&nbsp;=&nbsp;4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage5&nbsp;=&nbsp;!showImage5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination5&nbsp;=&nbsp;5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage6&nbsp;=&nbsp;!showImage6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination6&nbsp;=&nbsp;6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//COMBINATION RESULTS</span>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination3) == 4) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination4) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination5) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination6) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination3) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination4) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination6) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination4) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination5) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination6) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination5) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}
}
<span style="color: #666666;">//End&nbsp;of&nbsp;Loop</span>

</pre></div>

                <div class="code4 grid_10">
                    <p id="code4_text">Full setup()</p><pre>

<span style="color: #666666;">//&nbsp;setup()&nbsp;function&nbsp;only&nbsp;runs&nbsp;once</span>

<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>setup</b></span>() {                                                  <span style="color: #666666;">//Start of setup loop</span>
&nbsp;&nbsp;<span style="color: #006699;">size</span>(900, 505);                                               <span style="color: #666666;">//Canvas size</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the image by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;start=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;start.jpg&quot;</span>);                                 
&nbsp;&nbsp;background=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;room.jpg&quot;</span>);                             
&nbsp;&nbsp;paper=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;paper.png&quot;</span>);                                 
&nbsp;&nbsp;book=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;book.png&quot;</span>);                                   
&nbsp;&nbsp;copy=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;copy.png&quot;</span>);                                   
&nbsp;&nbsp;speechbubble=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;speechbubble.png&quot;</span>);                   

&nbsp;&nbsp;font&nbsp;=&nbsp;<span style="color: #006699;">loadFont</span>(<span style="color: #7D4793;">&quot;Algerian-48.vlw&quot;</span>);                           <span style="color: #666666;">//Loads the font from the Data folder</span>
&nbsp;&nbsp;font2&nbsp;=&nbsp;<span style="color: #006699;">loadFont</span>(<span style="color: #7D4793;">&quot;Chiller-Regular-48.vlw&quot;</span>);                   <span style="color: #666666;">//Loads the font from the Data folder</span>

&nbsp;&nbsp;<span style="color: #006699;">frameRate</span>(3);                                                 <span style="color: #666666;">//The rate at which the frames will load making it move faster or slower</span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #669900;">for</span> (<span style="color: #E2661A;">int</span>  r= 0; r&lt;room.<span style="color: #33997E;">length</span>; r++) {                         <span style="color: #666666;">//Loop sequential array </span>
&nbsp;&nbsp;&nbsp;&nbsp;room[r]&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;room&quot;</span> +<span style="color: #006699;">nf</span>(r, 3) + <span style="color: #7D4793;">&quot;.png&quot;</span>);             <span style="color: #666666;">//nf() is used to help the computer find the file, the 3 is the number of number characters my file has ex. room000</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #006699;">println</span>(<span style="color: #7D4793;">&quot;room&quot;</span> + r + <span style="color: #7D4793;">&quot;  &quot;</span>);                                 <span style="color: #666666;">//println() is used to debug and see what is going on in the process</span>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">for</span> (<span style="color: #E2661A;">int</span> s = 0; s&lt;snape.<span style="color: #33997E;">length</span>; s++) {                      <span style="color: #666666;">//Loop sequential array </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snape[s]&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;snape&quot;</span> +<span style="color: #006699;">nf</span>(s, 3) + <span style="color: #7D4793;">&quot;.png&quot;</span>);         <span style="color: #666666;">//nf() is used to help the computer find the file, the 3 is the number of number characters my file has ex. room000</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #006699;">println</span>(<span style="color: #7D4793;">&quot;snape&quot;</span> + s + <span style="color: #7D4793;">&quot;  &quot;</span>);                               <span style="color: #666666;">//println() is used to debug and see what is going on in the process</span>
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}



&nbsp;&nbsp;<span style="color: #666666;">//AUDIO</span>
&nbsp;&nbsp;minim&nbsp;=&nbsp;<span style="color: #33997E;">new</span> Minim(<span style="color: #33997E;">this</span>);                                      <span style="color: #666666;">//Loads the minim variable and using the import from the library to activate the song </span>
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">// this loads mysong.wmp3 from the data folder</span>
&nbsp;&nbsp;
&nbsp;&nbsp;player[0]&nbsp;=&nbsp;minim.loadFile(<span style="color: #7D4793;">&quot;song.mp3&quot;</span>);                       <span style="color: #666666;">//Loads the files in the brackets</span>
&nbsp;&nbsp;player2[0]&nbsp;=&nbsp;minim.loadFile(<span style="color: #7D4793;">&quot;water.mp3&quot;</span>);                     

&nbsp;&nbsp;<span style="color: #666666;">//POTIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the image by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;potion1=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient1.png&quot;</span>);                          
&nbsp;&nbsp;potion2=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient2.png&quot;</span>);                             
&nbsp;&nbsp;potion3=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient3.png&quot;</span>);                             
&nbsp;&nbsp;potion4=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient4.png&quot;</span>);                            
&nbsp;&nbsp;potion5=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient5.png&quot;</span>);                             
&nbsp;&nbsp;potion6=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient6.png&quot;</span>);                             

&nbsp;&nbsp;<span style="color: #666666;">//POTION 1 COMBINATIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;endpotion1=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion1.png&quot;</span>);                              
&nbsp;&nbsp;endpotion2=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion2.png&quot;</span>);                              
&nbsp;&nbsp;endpotion3=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion3.png&quot;</span>);                              
&nbsp;&nbsp;endpotion4=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion4.png&quot;</span>);                              
&nbsp;&nbsp;endpotion5=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion5.png&quot;</span>);                              
&nbsp;&nbsp;endpotion6=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion6.png&quot;</span>);                              
&nbsp;&nbsp;endpotion7=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion7.png&quot;</span>);                              
&nbsp;&nbsp;endpotion8=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion8.png&quot;</span>);                              
&nbsp;&nbsp;endpotion9=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion9.png&quot;</span>);                              
&nbsp;&nbsp;endpotion10=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion10.png&quot;</span>);                            
&nbsp;&nbsp;endpotion11=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion11.png&quot;</span>);                             
&nbsp;&nbsp;endpotion12=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion12.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion13=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion13.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion14=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion14.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion15=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion15.png&quot;</span>);                                

&nbsp;&nbsp;<span style="color: #666666;">//POTION RESULTS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images in the brackets which are the combination results</span>
&nbsp;&nbsp;
&nbsp;&nbsp;frog&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;frog.png&quot;</span>);
&nbsp;&nbsp;dementor&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dementor.png&quot;</span>);
&nbsp;&nbsp;werewolf&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;werewolf.png&quot;</span>);
&nbsp;&nbsp;griffin&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;griffin.png&quot;</span>);
&nbsp;&nbsp;hat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;hat.png&quot;</span>);
&nbsp;&nbsp;witch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;witch.png&quot;</span>);
&nbsp;&nbsp;dobby&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dobby.png&quot;</span>);
&nbsp;&nbsp;rat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;rat.png&quot;</span>);
&nbsp;&nbsp;voldemort&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;voldemort.png&quot;</span>);
&nbsp;&nbsp;owl&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;owl.png&quot;</span>);
&nbsp;&nbsp;snitch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;snitch.png&quot;</span>);
&nbsp;&nbsp;goodpotion1&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion1.png&quot;</span>);
&nbsp;&nbsp;goodpotion2&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion2.png&quot;</span>);
&nbsp;&nbsp;goodpotion3&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion3.png&quot;</span>);
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

</pre></div>

                <hr id="hr3" />
                <p id="code_title">STEP CODE</p>

                <div class="code5 grid_10" id="step_9_jump">
                    <p id="code5_text">Step 9 Code</p><pre>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;0&nbsp;</span>
<span style="color: #33997E;">void</span> drawScreenZero() {
&nbsp;&nbsp;<span style="color: #006699;">background</span>(start);                                <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;start&quot;</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                   <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(129, 132, 85);                               <span style="color: #666666;">//Dark green color will be filled </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(42);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Potions Class&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 355);              <span style="color: #666666;">//The text and where its placed in an x and y manner</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                  <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                               <span style="color: #666666;">//Orange color will be filled</span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar to Play&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 440);     <span style="color: #666666;">//The text and where its placed in an x and y manner</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

</pre></div>
                <p id="go_back2"><a href="#wrapper">Go back up?</a></p>
                <div class="code6 grid_10" id="step_11_jump">
                    <p id="code6_text">Step 11 Code</p><pre>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;2</span>
<span style="color: #33997E;">void</span> drawScreenTwo() {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                            <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;                       </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);   <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50);                      
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 

&nbsp;&nbsp;<span style="color: #666666;">//Text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                               <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(46);                                    <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Ingredients&quot;</span>, 710, 65);                    <span style="color: #666666;">//The text and its location on the x and y axis </span>

</pre></div>

                <p id="go_back3"><a href="#wrapper">Go back up?</a></p>
                <div class="code7 grid_10" id="step_13_jump">
                    <p id="code7_text">Step 13 Code</p><pre>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;2</span>
<span style="color: #33997E;">void</span> drawScreenTwo() {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                            <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;                       </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                    <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50);                      
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 

&nbsp;&nbsp;<span style="color: #666666;">//Text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                               <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(46);                                    <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Ingredients&quot;</span>, 710, 65);                    <span style="color: #666666;">//The text and its location on the x and y axis </span>

&nbsp;&nbsp;<span style="color: #666666;">//POTIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//showImage(s) booleans used to have the potion appear or dissapear when clicked </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage) <span style="color: #006699;">image</span>(potion1, 550, 80 );         <span style="color: #666666;">//If showImage (which is true as initialized at the start) then the image potion1 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage2)<span style="color: #006699;">image</span>(potion2, 650, 85 );         <span style="color: #666666;">//If showImage2 (which is true as initialized at the start) then the image potion2 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage3)<span style="color: #006699;">image</span>(potion3, 750, 85 );         <span style="color: #666666;">//If showImage3 (which is true as initialized at the start) then the image potion3 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage4)<span style="color: #006699;">image</span>(potion4, 550, 285);         <span style="color: #666666;">//If showImage4 (which is true as initialized at the start) then the image potion4 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage5)<span style="color: #006699;">image</span>(potion5, 650, 280 );        <span style="color: #666666;">//If showImage5 (which is true as initialized at the start) then the image potion5 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage6)<span style="color: #006699;">image</span>(potion6, 755, 285);         <span style="color: #666666;">//If showImage6 (which is true as initialized at the start) then the image potion6 will appear and be on co-ordinates x and y</span>
}

</pre></div>

                <p id="go_back5"><a href="#wrapper">Go back up?</a></p>
                <div class="code8 grid_10" id="step_15_jump">
                    <p id="code8_text">Step 15 Code</p><pre>
&nbsp;<span style="color: #666666;">//POTION 1 COMBINATIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;endpotion1=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion1.png&quot;</span>);                              
&nbsp;&nbsp;endpotion2=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion2.png&quot;</span>);                              
&nbsp;&nbsp;endpotion3=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion3.png&quot;</span>);                              
&nbsp;&nbsp;endpotion4=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion4.png&quot;</span>);                              
&nbsp;&nbsp;endpotion5=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion5.png&quot;</span>);                              
&nbsp;&nbsp;endpotion6=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion6.png&quot;</span>);                              
&nbsp;&nbsp;endpotion7=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion7.png&quot;</span>);                              
&nbsp;&nbsp;endpotion8=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion8.png&quot;</span>);                              
&nbsp;&nbsp;endpotion9=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion9.png&quot;</span>);                              
&nbsp;&nbsp;endpotion10=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion10.png&quot;</span>);                            
&nbsp;&nbsp;endpotion11=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion11.png&quot;</span>);                             
&nbsp;&nbsp;endpotion12=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion12.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion13=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion13.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion14=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion14.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion15=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion15.png&quot;</span>);                                

&nbsp;&nbsp;<span style="color: #666666;">//POTION RESULTS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images in the brackets which are the combination results</span>
&nbsp;&nbsp;
&nbsp;&nbsp;frog&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;frog.png&quot;</span>);
&nbsp;&nbsp;dementor&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dementor.png&quot;</span>);
&nbsp;&nbsp;werewolf&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;werewolf.png&quot;</span>);
&nbsp;&nbsp;griffin&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;griffin.png&quot;</span>);
&nbsp;&nbsp;hat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;hat.png&quot;</span>);
&nbsp;&nbsp;witch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;witch.png&quot;</span>);
&nbsp;&nbsp;dobby&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dobby.png&quot;</span>);
&nbsp;&nbsp;rat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;rat.png&quot;</span>);
&nbsp;&nbsp;voldemort&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;voldemort.png&quot;</span>);
&nbsp;&nbsp;owl&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;owl.png&quot;</span>);
&nbsp;&nbsp;snitch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;snitch.png&quot;</span>);
&nbsp;&nbsp;goodpotion1&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion1.png&quot;</span>);
&nbsp;&nbsp;goodpotion2&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion2.png&quot;</span>);
&nbsp;&nbsp;goodpotion3&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion3.png&quot;</span>);
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

</pre></div>

                <p id="go_back6"><a href="#wrapper">Go back up?</a></p>
                <div class="code9 grid_10" id="step_23_jump">
                    <p id="code9_text">Step 23 Code</p><pre>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>mousePressed</b></span>() {                        

&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 2 the images will dissapear based on the co-ordinates that were clicked. The music will also play and combination variables will be assigned a number </span>
&nbsp;&nbsp;<span style="color: #666666;">//which will give us the ability to use them when creating the different images to appear s</span>
&nbsp;&nbsp;<span style="color: #666666;">//ROW 1//</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (currentScreen == 2) {                                                   <span style="color: #666666;">//If current screen is equal to 2 </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 80 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage&nbsp;=&nbsp;!showImage;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination1&nbsp;=&nbsp;1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage2&nbsp;=&nbsp;!showImage2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination2&nbsp;=&nbsp;2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage3&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination3&nbsp;=&nbsp;3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//ROW2//</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage4&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination4&nbsp;=&nbsp;4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined                                                      </span>

&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage5&nbsp;=&nbsp;!showImage5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination5&nbsp;=&nbsp;5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage6&nbsp;=&nbsp;!showImage6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination6&nbsp;=&nbsp;6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//COMBINATION RESULTS</span>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination3) == 4) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination4) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination5) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination6) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination3) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination4) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination6) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination4) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination5) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination6) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination5) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;}
}

</pre></div>

                <p id="go_back7"><a href="#wrapper">Go back up?</a></p>
                <div class="code10 grid_10" id="step_27_28_29_jump">
                    <p id="code10_text">Step 27 + Step 28 + Step 29 Code</p><pre>
<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;5</span>
<span style="color: #33997E;">void</span> end1 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);          <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                  <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion1, 610, 100, 200, 350);          <span style="color: #666666;">//Image of &quot;goodpotion1&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                  <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                                           </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                      <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                  </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);           <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);               <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                              <span style="color: #666666;">//Dark orange color will be filled                  </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);               <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                  <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                   <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                 <span style="color: #666666;">//Dark red color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Mandrake Restorative Draught&quot;</span>, 710, 100);  <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;6</span>
<span style="color: #33997E;">void</span> end2 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);         <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                 <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion2, 610, 100, 200, 350);         <span style="color: #666666;">//Image of &quot;goodpotion2&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                       </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);;                             <span style="color: #666666;">//Dark brown color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);          <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled            </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                             <span style="color: #666666;">//Dark orange color will be filled             </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled               </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                  <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                <span style="color: #666666;">//Dark red color will be fil          </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Thick golden potion&quot;</span>, 710, 100);          <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;7</span>
<span style="color: #33997E;">void</span> end3 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                         <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;</span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                       <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);         <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                 <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion3, 610, 100, 200, 350);         <span style="color: #666666;">//Image of &quot;goodpotion3&quot; is loaded and its place in x and y axis as well as its size in width and height</span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled           </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);          <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled      </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                             <span style="color: #666666;">//Dark orange color will be filled      </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                  <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                <span style="color: #666666;">//Dark red color will be filled          </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Wiggenweld Potion&quot;</span>, 710, 100);            <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

</pre>
                </div>

                <hr id="hr3" />
                <p id="code_title">FINISHED CODE</p>

                <div class="code11 grid_10">
                    <p id="code11_text">Full Game Code</p> <pre>
<span style="color: #666666;">//N00152627&nbsp;Erika&nbsp;Volodko</span>
<span style="color: #666666;">//Harry&nbsp;Potter&nbsp;potion&nbsp;game</span>

<span style="color: #666666;">//Import&nbsp;library</span>
<span style="color: #33997E;">import</span> ddf.minim.*;                               <span style="color: #666666;">//Importing a music library in order for sound to work </span>

<span style="color: #666666;">///////////////////////////////////////////</span>
<span style="color: #666666;">//Audio</span>
Minim&nbsp;minim;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Sound player variable</span>
AudioPlayer&nbsp;song,&nbsp;water,&nbsp;bubbling,&nbsp;wand,&nbsp;slurp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Audio song variable names</span>
<span style="color: #E2661A;">boolean</span> playing= <span style="color: #33997E;">false</span>;                           <span style="color: #666666;">//Boolean to show the song is playing</span>
<span style="color: #E2661A;">String</span> soundeffect = <span style="color: #7D4793;">&quot;bubbling.mp3&quot;</span>;              <span style="color: #666666;">//Loading a music file </span>
<span style="color: #E2661A;">String</span> soundeffect2 = <span style="color: #7D4793;">&quot;wand.mp3&quot;</span>;                 <span style="color: #666666;">//Loading a music file </span>
<span style="color: #E2661A;">String</span> soundeffect3 = <span style="color: #7D4793;">&quot;slurp.mp3&quot;</span>;                <span style="color: #666666;">//Loading a music file </span>
AudioPlayer[]&nbsp;player&nbsp;=&nbsp;<span style="color: #33997E;">new</span> AudioPlayer[1];        <span style="color: #666666;">//Creating a player array so the song plays in a loop</span>
AudioPlayer[]&nbsp;player2&nbsp;=&nbsp;<span style="color: #33997E;">new</span> AudioPlayer[1];       <span style="color: #666666;">//Creating a player array so the song plays in a loop</span>
<span style="color: #666666;">////////////////////////////////////////////</span>
<span style="color: #666666;">//Screen&nbsp;change&nbsp;variable&nbsp;declared</span>
<span style="color: #E2661A;">int</span> currentScreen;                                <span style="color: #666666;">//Variable to create the different scenes(screens) for interaction</span>

<span style="color: #666666;">//Image&nbsp;variables&nbsp;declared</span>
<span style="color: #E2661A;">PImage</span> start, background, paper, book, copy, speechbubble, frog, dementor, werewolf, 
&nbsp;&nbsp;griffin,&nbsp;hat,&nbsp;witch,&nbsp;dobby,&nbsp;rat,&nbsp;voldemort,&nbsp;owl,&nbsp;snitch,&nbsp;goodpotion1,&nbsp;goodpotion2,&nbsp;goodpotion3,&nbsp;
&nbsp;&nbsp;endpotion1,&nbsp;endpotion2,&nbsp;endpotion3,&nbsp;endpotion4,&nbsp;endpotion5,&nbsp;endpotion6,&nbsp;endpotion7,&nbsp;
&nbsp;&nbsp;endpotion8,&nbsp;endpotion9,&nbsp;endpotion10,&nbsp;endpotion11,&nbsp;endpotion12,&nbsp;endpotion13,&nbsp;
&nbsp;&nbsp;endpotion14,&nbsp;endpotion15;

<span style="color: #666666;">//Font&nbsp;Variables&nbsp;declared</span>
<span style="color: #E2661A;">PFont</span> font, font2;                           <span style="color: #666666;">//Declare PFont variable</span>
<span style="color: #666666;">//////////////////////////////////////////</span>
<span style="color: #666666;">//&nbsp;Variables&nbsp;for&nbsp;animation&nbsp;</span>
<span style="color: #E2661A;">int</span> numFrames = 2;                           <span style="color: #666666;">//The number of frames in the animation </span>
<span style="color: #E2661A;">int</span> frame = 0;                               <span style="color: #666666;">//Frame variable which will be used to distinguish the pace of the animation </span>
<span style="color: #E2661A;">PImage</span>[] room = <span style="color: #33997E;">new</span> <span style="color: #E2661A;">PImage</span>[numFrames];       <span style="color: #666666;">//Image array for the cauldron animation</span>
<span style="color: #E2661A;">PImage</span>[] snape = <span style="color: #33997E;">new</span> <span style="color: #E2661A;">PImage</span>[numFrames];      <span style="color: #666666;">//Image array for Snape blinking</span>
<span style="color: #666666;">///////////////////////////////////////////</span>
<span style="color: #666666;">//For&nbsp;dragging&nbsp;and&nbsp;dropping&nbsp;potions&nbsp;code,&nbsp;its&nbsp;faulty&nbsp;as&nbsp;potions&nbsp;dont&nbsp;drag&nbsp;properly</span>
<span style="color: #666666;">/*boolean&nbsp;isDrag;</span>
<span style="color: #666666;">&nbsp;boolean&nbsp;clicked;</span>
<span style="color: #666666;">&nbsp;DraggableImage&nbsp;potion1,&nbsp;potion2,&nbsp;potion3,&nbsp;</span>
<span style="color: #666666;">&nbsp;potion4,&nbsp;potion5,&nbsp;potion6;&nbsp;</span>
<span style="color: #666666;">&nbsp;*/</span>
<span style="color: #666666;">//////////////////////////////////////////&nbsp;</span>
<span style="color: #666666;">//Potions</span>
<span style="color: #E2661A;">boolean</span> showImage = <span style="color: #33997E;">true</span>;                   <span style="color: #666666;">//The ingredient potions appearing is true but will disappear once set to &quot;false&quot;</span>
<span style="color: #E2661A;">boolean</span> showImage2 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage3 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage4 = <span style="color: #33997E;">true</span>;                  
<span style="color: #E2661A;">boolean</span> showImage5 = <span style="color: #33997E;">true</span>;                 
<span style="color: #E2661A;">boolean</span> showImage6 = <span style="color: #33997E;">true</span>;                  

<span style="color: #E2661A;">int</span> combination1 = 0;                       <span style="color: #666666;">//Combination integers which is used to create a mixture for 2 potions</span>
<span style="color: #E2661A;">int</span> combination2 = 0;                       
<span style="color: #E2661A;">int</span> combination3 = 0;                      
<span style="color: #E2661A;">int</span> combination4 = 0;                   
<span style="color: #E2661A;">int</span> combination5 = 0;                       
<span style="color: #E2661A;">int</span> combination6 = 0;                       

<span style="color: #E2661A;">PImage</span> potion1, potion2, potion3,           <span style="color: #666666;">//Creating variables for the potions images</span>
&nbsp;&nbsp;potion4,&nbsp;potion5,&nbsp;potion6;
<span style="color: #666666;">////////////////////////////////////////////</span>
<span style="color: #666666;">//SCORE</span>

<span style="color: #E2661A;">int</span> lives = 4;                              <span style="color: #666666;">//Lives will start at 4</span>
<span style="color: #666666;">////////////////////////////////////////////</span>

<span style="color: #666666;">//&nbsp;setup()&nbsp;function&nbsp;only&nbsp;runs&nbsp;once</span>

<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>setup</b></span>() {                                                  <span style="color: #666666;">//Start of setup loop</span>
&nbsp;&nbsp;<span style="color: #006699;">size</span>(900, 505);                                               <span style="color: #666666;">//Canvas size</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the image by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;start=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;start.jpg&quot;</span>);                                 
&nbsp;&nbsp;background=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;room.jpg&quot;</span>);                             
&nbsp;&nbsp;paper=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;paper.png&quot;</span>);                                 
&nbsp;&nbsp;book=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;book.png&quot;</span>);                                   
&nbsp;&nbsp;copy=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;copy.png&quot;</span>);                                   
&nbsp;&nbsp;speechbubble=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;speechbubble.png&quot;</span>);                   

&nbsp;&nbsp;font&nbsp;=&nbsp;<span style="color: #006699;">loadFont</span>(<span style="color: #7D4793;">&quot;Algerian-48.vlw&quot;</span>);                           <span style="color: #666666;">//Loads the font from the Data folder</span>
&nbsp;&nbsp;font2&nbsp;=&nbsp;<span style="color: #006699;">loadFont</span>(<span style="color: #7D4793;">&quot;Chiller-Regular-48.vlw&quot;</span>);                   <span style="color: #666666;">//Loads the font from the Data folder</span>

&nbsp;&nbsp;<span style="color: #006699;">frameRate</span>(3);                                                 <span style="color: #666666;">//The rate at which the frames will load making it move faster or slower</span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #669900;">for</span> (<span style="color: #E2661A;">int</span>  r= 0; r&lt;room.<span style="color: #33997E;">length</span>; r++) {                         <span style="color: #666666;">//Loop sequential array </span>
&nbsp;&nbsp;&nbsp;&nbsp;room[r]&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;room&quot;</span> +<span style="color: #006699;">nf</span>(r, 3) + <span style="color: #7D4793;">&quot;.png&quot;</span>);             <span style="color: #666666;">//nf() is used to help the computer find the file, the 3 is the number of number characters my file has ex. room000</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #006699;">println</span>(<span style="color: #7D4793;">&quot;room&quot;</span> + r + <span style="color: #7D4793;">&quot;  &quot;</span>);                                 <span style="color: #666666;">//println() is used to debug and see what is going on in the process</span>

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">for</span> (<span style="color: #E2661A;">int</span> s = 0; s&lt;snape.<span style="color: #33997E;">length</span>; s++) {                      <span style="color: #666666;">//Loop sequential array </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snape[s]&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;snape&quot;</span> +<span style="color: #006699;">nf</span>(s, 3) + <span style="color: #7D4793;">&quot;.png&quot;</span>);         <span style="color: #666666;">//nf() is used to help the computer find the file, the 3 is the number of number characters my file has ex. room000</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #006699;">println</span>(<span style="color: #7D4793;">&quot;snape&quot;</span> + s + <span style="color: #7D4793;">&quot;  &quot;</span>);                               <span style="color: #666666;">//println() is used to debug and see what is going on in the process</span>
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}



&nbsp;&nbsp;<span style="color: #666666;">//AUDIO</span>
&nbsp;&nbsp;minim&nbsp;=&nbsp;<span style="color: #33997E;">new</span> Minim(<span style="color: #33997E;">this</span>);                                      <span style="color: #666666;">//Loads the minim variable and using the import from the library to activate the song </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">// this loads mysong.wmp3 from the data folder</span>
&nbsp;&nbsp;
&nbsp;&nbsp;player[0]&nbsp;=&nbsp;minim.loadFile(<span style="color: #7D4793;">&quot;song.mp3&quot;</span>);                       <span style="color: #666666;">//Loads the files in the brackets</span>
&nbsp;&nbsp;player2[0]&nbsp;=&nbsp;minim.loadFile(<span style="color: #7D4793;">&quot;water.mp3&quot;</span>);                     

&nbsp;&nbsp;<span style="color: #666666;">//POTIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the image by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;potion1=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient1.png&quot;</span>);                          
&nbsp;&nbsp;potion2=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient2.png&quot;</span>);                             
&nbsp;&nbsp;potion3=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient3.png&quot;</span>);                             
&nbsp;&nbsp;potion4=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient4.png&quot;</span>);                            
&nbsp;&nbsp;potion5=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient5.png&quot;</span>);                             
&nbsp;&nbsp;potion6=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;ingridient6.png&quot;</span>);                             

&nbsp;&nbsp;<span style="color: #666666;">//POTION 1 COMBINATIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images by the name in the brackets</span>
&nbsp;&nbsp;
&nbsp;&nbsp;endpotion1=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion1.png&quot;</span>);                              
&nbsp;&nbsp;endpotion2=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion2.png&quot;</span>);                              
&nbsp;&nbsp;endpotion3=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion3.png&quot;</span>);                              
&nbsp;&nbsp;endpotion4=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion4.png&quot;</span>);                              
&nbsp;&nbsp;endpotion5=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion5.png&quot;</span>);                              
&nbsp;&nbsp;endpotion6=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion6.png&quot;</span>);                              
&nbsp;&nbsp;endpotion7=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion7.png&quot;</span>);                              
&nbsp;&nbsp;endpotion8=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion8.png&quot;</span>);                              
&nbsp;&nbsp;endpotion9=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion9.png&quot;</span>);                              
&nbsp;&nbsp;endpotion10=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion10.png&quot;</span>);                            
&nbsp;&nbsp;endpotion11=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion11.png&quot;</span>);                             
&nbsp;&nbsp;endpotion12=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion12.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion13=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion13.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion14=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion14.png&quot;</span>);                                 
&nbsp;&nbsp;endpotion15=<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;potion15.png&quot;</span>);                                

&nbsp;&nbsp;<span style="color: #666666;">//POTION RESULTS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//Loads the images in the brackets which are the combination results</span>
&nbsp;&nbsp;
&nbsp;&nbsp;frog&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;frog.png&quot;</span>);
&nbsp;&nbsp;dementor&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dementor.png&quot;</span>);
&nbsp;&nbsp;werewolf&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;werewolf.png&quot;</span>);
&nbsp;&nbsp;griffin&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;griffin.png&quot;</span>);
&nbsp;&nbsp;hat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;hat.png&quot;</span>);
&nbsp;&nbsp;witch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;witch.png&quot;</span>);
&nbsp;&nbsp;dobby&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;dobby.png&quot;</span>);
&nbsp;&nbsp;rat&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;rat.png&quot;</span>);
&nbsp;&nbsp;voldemort&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;voldemort.png&quot;</span>);
&nbsp;&nbsp;owl&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;owl.png&quot;</span>);
&nbsp;&nbsp;snitch&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;snitch.png&quot;</span>);
&nbsp;&nbsp;goodpotion1&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion1.png&quot;</span>);
&nbsp;&nbsp;goodpotion2&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion2.png&quot;</span>);
&nbsp;&nbsp;goodpotion3&nbsp;=&nbsp;<span style="color: #006699;">loadImage</span>(<span style="color: #7D4793;">&quot;goodpotion3.png&quot;</span>);
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//////////////////////////////////////////</span>

<span style="color: #666666;">//&nbsp;draw()&nbsp;loops&nbsp;forever,&nbsp;until&nbsp;stopped</span>

<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>draw</b></span>() {                        <span style="color: #666666;">//Start of draw loop</span>
&nbsp;&nbsp;<span style="color: #669900;">switch</span>(currentScreen) {            <span style="color: #666666;">//Controls the jumps to different screens in this case the integer which is currentScreen</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 0:                            <span style="color: #666666;">//Cases are the value of currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenZero();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the first currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 1:                            <span style="color: #666666;">//currentScreen is now 1 </span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenOne();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the second currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 2:                            <span style="color: #666666;">//currentScreen is now 2</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenTwo();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the third currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()                </span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 3:                            <span style="color: #666666;">//currentScreen is now 3</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenThree();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the fourth currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 4:                            <span style="color: #666666;">//currentScreen is now 4</span>
&nbsp;&nbsp;&nbsp;&nbsp;drawScreenFour();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the fifth currentScreen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 5:                            <span style="color: #666666;">//currentScreen is now 5</span>
&nbsp;&nbsp;&nbsp;&nbsp;end1();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 6:                            <span style="color: #666666;">//currentScreen is now 6</span>
&nbsp;&nbsp;&nbsp;&nbsp;end2();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the second end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 7:                            <span style="color: #666666;">//currentScreen is now 7</span>
&nbsp;&nbsp;&nbsp;&nbsp;end3();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name for the third end result</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;<span style="color: #33997E;">case</span> 8:                            <span style="color: #666666;">//If the currentScreen is now 8 that means its the end of the game</span>
&nbsp;&nbsp;&nbsp;&nbsp;endOfGame();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Name of the last screen</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #33997E;">break</span>;                           <span style="color: #666666;">//Ends the execution of this part in switch()</span>
&nbsp;&nbsp;}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//End of loop</span>

&nbsp;&nbsp;<span style="color: #666666;">//Song playing on loop</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (!player[0].isPlaying()) {     <span style="color: #666666;">//If the player is equal to zero it will play in a loop</span>
&nbsp;&nbsp;&nbsp;&nbsp;player[0].rewind();
&nbsp;&nbsp;&nbsp;&nbsp;player[0].play();
&nbsp;&nbsp;}
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//////////////////////////////////////////</span>

<span style="color: #666666;">//If&nbsp;the&nbsp;key&nbsp;is&nbsp;pressed&nbsp;this&nbsp;fuction&nbsp;will&nbsp;activate&nbsp;in&nbsp;a&nbsp;loop</span>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>keyPressed</b></span>() {                                                                                               

&nbsp;&nbsp;<span style="color: #669900;">if</span> (<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 0 ||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 1) {              <span style="color: #666666;">//If Spacebar is pressed and currentScreen is 0 OR 1 </span>
&nbsp;&nbsp;&nbsp;&nbsp;currentScreen++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Then currentScreen will add 1 and move on to the next currentScreen </span>
&nbsp;&nbsp;}

&nbsp;&nbsp;<span style="color: #669900;">if</span> (<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 4 ||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 5                 <span style="color: #666666;">//If Spacebar is pressed and currentScreen is 4 OR 5 OR 6 OR 7 </span>
&nbsp;&nbsp;||<span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 6 || <span style="color: #D94A7A;">key</span> == <span style="color: #7D4793;">&apos; &apos;</span> &amp;&amp; currentScreen == 7 ) {
&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//then it will go back to screen 2</span>
&nbsp;&nbsp;&nbsp;&nbsp;reset();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//And reset variable will activate</span>
&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;
}&nbsp;
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
<span style="color: #666666;">//////////////////////////////////////////</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;0&nbsp;</span>
<span style="color: #33997E;">void</span> drawScreenZero() {
&nbsp;&nbsp;<span style="color: #006699;">background</span>(start);                                <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;start&quot;</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                   <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(129, 132, 85);                               <span style="color: #666666;">//Dark green color will be filled </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(42);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Potions Class&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 355);              <span style="color: #666666;">//The text and where its placed in an x and y manner</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                  <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                               <span style="color: #666666;">//Orange color will be filled</span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar to Play&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 440);     <span style="color: #666666;">//The text and where its placed in an x and y manner</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;1</span>
<span style="color: #33997E;">void</span> drawScreenOne() {
&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                           <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(book, 20, 5, 860, 500);                     <span style="color: #666666;">//Image of &quot;book2 is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(copy, 480, 30, 350, 450);                   <span style="color: #666666;">//Image of &quot;copy&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//TEXT</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                      <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                  </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(23);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Magical Drafts and Potions&quot;</span>, 250, 80);         <span style="color: #666666;">//The text and its location on the x and y axis</span>
&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                        </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You need to do the following:&quot;</span>, 250, 150);     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                     <span style="color: #666666;">//Dark red color will be filled                   </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Mix 2 ingridients  &quot;</span>, 250, 200);               <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here                                  </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                        </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;to create the right combination.&quot;</span>, 250, 250);  <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here        </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                       </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Your teacher will test the potion&quot;</span>, 250, 300); <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here     </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;If its unsuccessful,&quot;</span>, 250, 350);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                     <span style="color: #666666;">//Font2 is loaded in the setup and setup here     </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                   <span style="color: #666666;">//Dark brown color will be filled                              </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;There will be consequences...&quot;</span>, 250, 400);     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                      <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                     <span style="color: #666666;">//Dark red color will be filled                    </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(20);                                        <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar to Start&quot;</span>, 250, 450);           <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;2</span>
<span style="color: #33997E;">void</span> drawScreenTwo() {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                            <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;                       </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                    <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//AUDIO</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (!player2[0].isPlaying()) {                     <span style="color: #666666;">//If the player is equal to zero it will play in a loop</span>
&nbsp;&nbsp;&nbsp;&nbsp;player2[0].rewind();
&nbsp;&nbsp;&nbsp;&nbsp;player2[0].play();
&nbsp;&nbsp;}


&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50);                      
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 

&nbsp;&nbsp;<span style="color: #666666;">//Text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                               <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(46);                                    <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Ingredients&quot;</span>, 710, 65);                    <span style="color: #666666;">//The text and its location on the x and y axis </span>

&nbsp;&nbsp;<span style="color: #666666;">//POTIONS</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//showImage(s) booleans used to have the potion appear or dissapear when clicked </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage) <span style="color: #006699;">image</span>(potion1, 550, 80 );         <span style="color: #666666;">//If showImage (which is true as initialized at the start) then the image potion1 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage2)<span style="color: #006699;">image</span>(potion2, 650, 85 );         <span style="color: #666666;">//If showImage2 (which is true as initialized at the start) then the image potion2 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage3)<span style="color: #006699;">image</span>(potion3, 750, 85 );         <span style="color: #666666;">//If showImage3 (which is true as initialized at the start) then the image potion3 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage4)<span style="color: #006699;">image</span>(potion4, 550, 285);         <span style="color: #666666;">//If showImage4 (which is true as initialized at the start) then the image potion4 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage5)<span style="color: #006699;">image</span>(potion5, 650, 280 );        <span style="color: #666666;">//If showImage5 (which is true as initialized at the start) then the image potion5 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (showImage6)<span style="color: #006699;">image</span>(potion6, 755, 285);         <span style="color: #666666;">//If showImage6 (which is true as initialized at the start) then the image potion6 will appear and be on co-ordinates x and y</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//LIVES</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Attempt: &quot;</span>, 80, 50);                     <span style="color: #666666;">//The text and its location on the x and y axis </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                        </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(30);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(lives , 150, 50);                         <span style="color: #666666;">//The text will use the lives value </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span>( lives == 0) 
&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;8;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If lives is equal to zero then its the last screen</span>

}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;3</span>
<span style="color: #33997E;">void</span> drawScreenThree() {
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>

&nbsp;&nbsp;<span style="color: #666666;">//AUDIO</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3 &amp;&amp; playing == <span style="color: #33997E;">false</span>) {      <span style="color: #666666;">//If combination1 and combination2 is equal to 3 AND the playing is FALSE </span>
&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//the bubbling file will load soundeffect and</span>
&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//then the bubbling sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;                                                    <span style="color: #666666;">//and playing will equal to TRUE </span>
&nbsp;&nbsp;}

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);               <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                       <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>

&nbsp;&nbsp;<span style="color: #666666;">//TEXT</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                       <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                    <span style="color: #666666;">//Dark brown color will be filled                      </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(20);                                         <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Lets try this out.&quot;</span>, 330, 90);                  <span style="color: #666666;">//The text and its location on the x and y axis </span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                      <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                                   <span style="color: #666666;">//Orange color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                         <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Click on the potion to Continue&quot;</span>, 330, 130);    <span style="color: #666666;">//The text and its location on the x and y axis </span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                      <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                                    <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(46);                                         <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You have created...&quot;</span>, 710, 65);                 <span style="color: #666666;">//The text and its location on the x and y axis </span>



&nbsp;&nbsp;<span style="color: #666666;">//If the combinations outlined are equal to a certain number then an image will pop up based on that combination in ( potion, x, y , width, height)   </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//POTION 1 COMBINATIONS</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3)<span style="color: #006699;">image</span>(endpotion1, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination3) == 4)<span style="color: #006699;">image</span>(endpotion2, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination4) == 5)<span style="color: #006699;">image</span>(endpotion3, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination5) == 6)<span style="color: #006699;">image</span>(endpotion4, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination6) == 7)<span style="color: #006699;">image</span>(endpotion5, 610, 100, 200, 350);

&nbsp;&nbsp;<span style="color: #666666;">//POTION 2 COMBINATIONS</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination3) == 5)<span style="color: #006699;">image</span>(endpotion6, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination4) == 6)<span style="color: #006699;">image</span>(endpotion7, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7)<span style="color: #006699;">image</span>(endpotion8, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination6) == 8)<span style="color: #006699;">image</span>(endpotion9, 610, 100, 200, 350);

&nbsp;&nbsp;<span style="color: #666666;">//POTION 3 COMBINATIONS </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination4) == 7)<span style="color: #006699;">image</span>(endpotion10, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination5) == 8)<span style="color: #006699;">image</span>(endpotion11, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination6) == 9)<span style="color: #006699;">image</span>(endpotion12, 610, 100, 200, 350);

&nbsp;&nbsp;<span style="color: #666666;">//POTION 4 COMBINATIONS </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination5) == 9)<span style="color: #006699;">image</span>(endpotion13, 610, 100, 200, 350);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10)<span style="color: #006699;">image</span>(endpotion14, 610, 100, 200, 350);

&nbsp;&nbsp;<span style="color: #666666;">//POTION 5 + 6 COMBINATIONS</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11)<span style="color: #006699;">image</span>(endpotion15, 610, 100, 200, 350);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//LIVES</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Attempt: &quot;</span>, 80, 50);                       <span style="color: #666666;">//The text and its location on the x and y axis </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                        </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(30);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(lives , 150, 50);                         <span style="color: #666666;">//The text will use the lives value </span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;currentScreen&nbsp;4</span>
<span style="color: #33997E;">void</span> drawScreenFour() {
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 180, 30, 500, 120);                 <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height ;</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                  <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                               </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Try Again?&quot;</span>, 420, 90);                     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                 <span style="color: #666666;">//Red color will be filled               </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                    <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar&quot;</span>, 420, 130);                <span style="color: #666666;">//The text and its location on the x and y axis</span>


&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                         <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array image has now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 


&nbsp;&nbsp;<span style="color: #666666;">//BAD RESULTS OF COMBINATIONS</span>
&nbsp;&nbsp;<span style="color: #666666;">//If the combinations outlined are equal to a certain number then an image will pop up based on that combination in ( potion, x, y , width, height)   </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3)<span style="color: #006699;">image</span>(frog, -80, 150, 400, 400);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination3) == 4)<span style="color: #006699;">image</span>(dementor, -40, 40, 550, 500);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination4) == 5)<span style="color: #006699;">image</span>(werewolf, -40, 80, 550, 500);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination5) == 6)<span style="color: #006699;">image</span>(griffin, -140, 80, 550, 500);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination6) == 7)<span style="color: #006699;">image</span>(hat, 20, 250, 250, 220);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination3) == 5)<span style="color: #006699;">image</span>(witch, -40, 30, 450, 500);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination4) == 6)<span style="color: #006699;">image</span>(dobby, 130, 80, 170, 400);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination6) == 8)<span style="color: #006699;">image</span>(rat, 50, 280, 280, 220);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination4) == 7)<span style="color: #006699;">image</span>(voldemort, -20, 130, 330, 400);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination5) == 8)<span style="color: #006699;">image</span>(owl, 40, 280, 170, 250);
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination6) == 9)<span style="color: #006699;">image</span>(owl, 40, 280, 170, 250);
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination5) == 9)<span style="color: #006699;">image</span>(snitch, 40, 50, 200, 250);
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//LIVES</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                         </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Attempt: &quot;</span>, 80, 50);                       <span style="color: #666666;">//The text and its location on the x and y axis </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                            <span style="color: #666666;">//Dark brown color will be filled                        </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(30);                                  <span style="color: #666666;">//The text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(lives , 150, 50);                         <span style="color: #666666;">//The text will use the lives value </span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #669900;">if</span>( lives == 0)
&nbsp;&nbsp;currentScreen=currentScreen;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If lives is equal to zero then the currentScreen changes to 8</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>


<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;5</span>
<span style="color: #33997E;">void</span> end1 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);          <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                  <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion1, 610, 100, 200, 350);          <span style="color: #666666;">//Image of &quot;goodpotion1&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                  <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                                           </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                      <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                  </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);           <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);               <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                              <span style="color: #666666;">//Dark orange color will be filled                  </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);               <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                  <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                               <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                   <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                 <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                 <span style="color: #666666;">//Dark red color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                    <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Mandrake Restorative Draught&quot;</span>, 710, 100);  <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;6</span>
<span style="color: #33997E;">void</span> end2 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                          <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;              </span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                        <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis    </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);         <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                 <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion2, 610, 100, 200, 350);         <span style="color: #666666;">//Image of &quot;goodpotion2&quot; is loaded and its place in x and y axis as well as its size in width and height </span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                       </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);;                             <span style="color: #666666;">//Dark brown color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);          <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled            </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                             <span style="color: #666666;">//Dark orange color will be filled             </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled               </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                  <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                <span style="color: #666666;">//Dark red color will be fil          </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Thick golden potion&quot;</span>, 710, 100);          <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//Drawing&nbsp;the&nbsp;result&nbsp;screen&nbsp;7</span>
<span style="color: #33997E;">void</span> end3 () {

&nbsp;&nbsp;<span style="color: #006699;">background</span>(background);                         <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;background&quot;</span>

&nbsp;&nbsp;<span style="color: #666666;">//ANIMATION</span>
&nbsp;&nbsp;<span style="color: #666666;">//Snape and Cauldron</span>
&nbsp;&nbsp;frame++;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The frame will add 1 </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (frame == numFrames) {                       <span style="color: #666666;">//If the frame is equal to the numFaces variable the frame will be equal to 0 making the animation constantly run</span>
&nbsp;&nbsp;&nbsp;&nbsp;frame&nbsp;=&nbsp;0;
&nbsp;&nbsp;}&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//The array images have now a value of &quot;frames&quot; which above is equal to the &quot;numFaces&quot; , its placed in the x and y axis </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(snape[frame], -120, 50); 
&nbsp;&nbsp;<span style="color: #006699;">image</span>(room[frame], 318, 198); 
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//IMAGES</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(speechbubble, 180, 30, 300, 200);         <span style="color: #666666;">//Image of &quot;speechbubble&quot; is loaded and its place in x and y axis as well as its size in width and height </span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(paper, 520, 0, 370, 500);                 <span style="color: #666666;">//Image of &quot;paper&quot; is loaded and its place in x and y axis as well as its size in width and height</span>
&nbsp;&nbsp;<span style="color: #006699;">image</span>(goodpotion3, 610, 100, 200, 350);         <span style="color: #666666;">//Image of &quot;goodpotion3&quot; is loaded and its place in x and y axis as well as its size in width and height</span>


&nbsp;&nbsp;<span style="color: #666666;">//Snape text</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled           </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(18);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Finally. &quot;</span>, 330, 70);                     <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(25);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Now turn to page 394&quot;</span>, 330, 90);          <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled      </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot; or try Again? &quot;</span>, 330, 130);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                             <span style="color: #666666;">//Dark orange color will be filled      </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press Spacebar &quot;</span>, 330, 160);              <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #666666;">//Text on Paper</span>
&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                 <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(102, 62, 35);                              <span style="color: #666666;">//Dark brown color will be filled                 </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(28);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;You created &quot;</span>, 710, 65);                  <span style="color: #666666;">//The text and its location on the x and y axis</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                <span style="color: #666666;">//Font2 loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(165, 0, 0);                                <span style="color: #666666;">//Dark red color will be filled          </span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(38);                                   <span style="color: #666666;">//Text size</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Wiggenweld Potion&quot;</span>, 710, 100);            <span style="color: #666666;">//The text and its location on the x and y axis</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>

<span style="color: #666666;">//The&nbsp;reset&nbsp;variable&nbsp;which&nbsp;is&nbsp;recalled&nbsp;in&nbsp;the&nbsp;if&nbsp;keyPressed&nbsp;statement&nbsp;</span>
<span style="color: #33997E;">void</span> reset() {
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//ALL VALUES RESET TO ORIGINAL</span>
&nbsp;&nbsp;showImage&nbsp;=&nbsp;<span style="color: #33997E;">true</span>;    
&nbsp;&nbsp;showImage2&nbsp;=&nbsp;<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;showImage3&nbsp;=&nbsp;<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;showImage4&nbsp;=&nbsp;<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;showImage5&nbsp;=&nbsp;<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;showImage6&nbsp;=&nbsp;<span style="color: #33997E;">true</span>; 

&nbsp;&nbsp;combination1&nbsp;=&nbsp;0;
&nbsp;&nbsp;combination2&nbsp;=&nbsp;0;
&nbsp;&nbsp;combination3&nbsp;=&nbsp;0;
&nbsp;&nbsp;combination4&nbsp;=&nbsp;0;
&nbsp;&nbsp;combination5&nbsp;=&nbsp;0;
&nbsp;&nbsp;combination6&nbsp;=&nbsp;0;

&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>


<span style="color: #666666;">//END&nbsp;OF&nbsp;GAME</span>
<span style="color: #33997E;">void</span> endOfGame(){
&nbsp;&nbsp;<span style="color: #006699;">background</span>(start);                                <span style="color: #666666;">//Background image is loaded from the setup in the name of &quot;start&quot;</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font);                                   <span style="color: #666666;">//Font loaded from setup </span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(129, 132, 85);                               <span style="color: #666666;">//Dark green color will be filled </span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(42);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;END OF GAME&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 355);                <span style="color: #666666;">//The text and where its placed in an x and y manner</span>

&nbsp;&nbsp;<span style="color: #006699;">textFont</span>(font2);                                  <span style="color: #666666;">//Font loaded from setup</span>
&nbsp;&nbsp;<span style="color: #006699;">fill</span>(224, 151, 46);                               <span style="color: #666666;">//Orange color will be filled</span>
&nbsp;&nbsp;<span style="color: #006699;">textAlign</span>(<span style="color: #718A62;">CENTER</span>);                                <span style="color: #666666;">//Text is aligned in the center</span>
&nbsp;&nbsp;<span style="color: #006699;">textSize</span>(40);                                     <span style="color: #666666;">//The size of the text</span>
&nbsp;&nbsp;<span style="color: #006699;">text</span>(<span style="color: #7D4793;">&quot;Press ESC to exit and then Start again&quot;</span>, <span style="color: #D94A7A;">width</span>/2, 440);     <span style="color: #666666;">//The text and where its placed in an x and y manner</span>
}
<span style="color: #666666;">//end&nbsp;of&nbsp;loop</span>
&nbsp;&nbsp;
<span style="color: #666666;">///////////////////////////////////////////////////</span>
<span style="color: #33997E;">void</span> <span style="color: #006699;"><b>mousePressed</b></span>() {                        

&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 3 and the mouse is pressed is in the accordinates below then </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (currentScreen == 3 ) {
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 610 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 750) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 90 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 450)) { 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//the currentScreen changes to 4 </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                            <span style="color: #666666;">//and playing is false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slurp=minim.loadFile(soundeffect3);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slurp.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 4 and the combinations are equal to numbers outlined before then the currentScreen will be re-directed </span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> ( currentScreen == 4) {
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//Directing the the right combination</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10) currentScreen = 5;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11) currentScreen = 7;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7) currentScreen = 6;
&nbsp;&nbsp;}

&nbsp;&nbsp;<span style="color: #666666;">//If the currentScreen is equal to 2 the images will dissapear based on the co-ordinates that were clicked. The music will also play and combination variables will be assigned a number </span>
&nbsp;&nbsp;<span style="color: #666666;">//which will give us the ability to use them when creating the different images to appear s</span>
&nbsp;&nbsp;<span style="color: #666666;">//ROW 1//</span>
&nbsp;&nbsp;<span style="color: #669900;">if</span> (currentScreen == 2) {                                                   <span style="color: #666666;">//If current screen is equal to 2 </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 80 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage&nbsp;=&nbsp;!showImage;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination1&nbsp;=&nbsp;1;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage2&nbsp;=&nbsp;!showImage2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination2&nbsp;=&nbsp;2;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 85 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 240)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined        </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage3&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination3&nbsp;=&nbsp;3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                        <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//ROW2//</span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 550 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 640) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage4&nbsp;=&nbsp;!showImage3;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination4&nbsp;=&nbsp;4;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 650 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 740) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage5&nbsp;=&nbsp;!showImage5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination5&nbsp;=&nbsp;5;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((<span style="color: #D94A7A;">mouseX</span> &gt; 760 &amp;&amp; <span style="color: #D94A7A;">mouseX</span> &lt; 850) &amp;&amp; (<span style="color: #D94A7A;">mouseY</span> &gt; 290 &amp;&amp; <span style="color: #D94A7A;">mouseY</span> &lt; 500)) {    <span style="color: #666666;">//And the mouse clicks on the places outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;showImage6&nbsp;=&nbsp;!showImage6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The image disappears when clicked</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combination6&nbsp;=&nbsp;6;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The combination will equal to the number outlined</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;                                                         <span style="color: #666666;">//Playing will turn to false</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling=minim.loadFile(soundeffect);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bubbling.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//COMBINATION RESULTS</span>
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination2) == 3) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination3) == 4) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination4) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination5) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination1 + combination6) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination3) == 5) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination4) == 6) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination5) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination2 + combination6) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination4) == 7) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination5) == 8) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination3 + combination6) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination5) == 9) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lives--;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//One life will be taken away</span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}

&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination4 + combination6) == 10) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//If the combinationes are equal to the numbers outlined then the currentScreen will redirect to 3 and the sound will play </span>
&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #669900;">if</span> ((combination5 + combination6) == 11) {
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentScreen&nbsp;=&nbsp;3;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing&nbsp;=&nbsp;<span style="color: #33997E;">false</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand=minim.loadFile(soundeffect2);&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: #666666;">//The music is playing on loop and turns playing on so that it will constantly play when this setting is active </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wand.play();
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;playing=<span style="color: #33997E;">true</span>;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;&nbsp;&nbsp;}
&nbsp;&nbsp;}
}
<span style="color: #666666;">//END&nbsp;OF&nbsp;GAME&nbsp;AND&nbsp;LOOP</span>

</pre></div>

                <div class="end_text grid_7">

                    <a id="click_data" href="data.zip">Click me to download the data folder.</a>
                    <br />
                    <br />
                    <a id="click_processing" href="https://processing.org/download/">Click me to download Processing 3.0.2</a>

                </div>

                <hr id="hr3" /> <!--This si the hr element which will create a line-->


                <div class="space grid_12"></div><!--Creating a space for the comment section-->

    <!--The styling of the comment section-->
                <form action="tut_main.php" method="post">
                    <p>Username: </p>
                    <input type="text" name="username">
                    <br>
                    <br>
                    <p>Comment: </p>
                    <textarea rows="8" cols="50" name="comment"></textarea>
                    <br>
                    <input type="submit" name="submit">
                </form>

    
                <div class="grid_6 omega">

                    <p>User Comments</p>
                    <p>
                        <!--The PHP code-->
                        <?php 
                    $servername = "daneel";
                    $username = "N00152627";
                    $password = "N00153637";
                    $dbname = "n00152627playground";
                    
                    // Create connection to the DB
                    $conn = new mysqli($servername, $username, $password,$dbname);

                    // Check connection was created successfully
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                
                    $sql =   "SELECT username, comment FROM comments";
                $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row using a loop
    while($row = $result->fetch_assoc()) {
		echo "<br>";
        echo "Username: " ."<br>" . $row["username"];
		echo "<br><br>";
		echo "Comment: ". "<br>" . $row["comment"];
		echo "<br><br>";
    }
} else {
    echo "0 results";
}
                ?>
                    </p>

                </div>


                <!--This is the end of the container div-->
            </div>
            <!--This is the end of the wrapper container and the main content-->
        </div>

        <div class="clear"></div>
        <!--Clear property specifies on which sides the elements can't float-->

        <!--Im creating a new div with 2 class names using the grid_12 from 960 stylesheet-->
        <!--All footer elements will be here-->
        <div class="footer grid_12">

            <h1 id="footer_logo"> Process.</h1>
            <!--Another h1 element with a unique id to style it in css-->
            <h2 id="footer_logo2">IT.</h2>
            <!--Another h1 element with a unique id to style it in css-->

            <!--Im creating another small triangle for the footer logo design-->
            <div class="small_rectangle2"></div>

            <!--This is another javascript for the digital time in the footer-->
            <script src="js/time.js "></script>
            <div id="clock"></div>


            <!--Im creating a new div to have the links together in the footer-->
            <div class="footer_text">
                <!--This is another unsorted list-->
                <ul>
                    <!--A list of h4 for links in the footer-->
                    <li><a id="footer_nav" href="index.html">Terms and Conditions.</a></li>
                    <li><a id="footer_nav" href="index.html">Frequently Asked Questions.</a></li>
                    <li><a id="footer_nav" href="index.html">Who are we?</a></li>
                    <!--the end of the unsorted list element-->
                </ul>
                <!--This is the end of the footer text div-->
            </div>

            <!--This is my h5 with a unique id-->
            <h5 id="follow"> Follow Us!</h5>

            <!--Im creating a new div for all the social media pictures to be in one place-->
            <div class="media">
                <!--In here Im making the file search for images by names in the src element and make them clickable-->
                <!--The img element is self closing-->
                <a href="index.html"><img src="images/facebook.png" alt="facebook" /></a>
                <a href="index.html"><img src="images/twitter.png" alt="twitter" /></a>
                <a href="index.html"><img src="images/myspace.png" alt="myspace" /></a>
                <a href="index.html"><img src="images/vimeo.png" alt="vimeo" /></a>
                <a href="index.html"><img src="images/youtube.png" alt="youtube" /></a>
                <!--This is the end of the media div-->
            </div>

            <!--This is the end of the footer div-->
        </div>

        <div class="clear"></div>
        <!--Clear property specifies on which sides the elements can't float-->

        <!--This is my copyright text using the p element for easier and simple styling-->
        <p id="copyright"> Copyright 2016. All Rights Reserved.</p>

        <!--This is the end of the body-->
</body>

<!-- This is the end of my code-->

</html>

<!--Student: Erika Volodko
    Number: N00152627 -->
