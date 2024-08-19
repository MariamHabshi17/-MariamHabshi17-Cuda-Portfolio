<?php
// Include your database configuration file
@include 'config.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data using the POST method
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Create an SQL query to insert the data into a table (e.g., 'messages')
    $query = "INSERT INTO user (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cuda</title>
        <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playwrite+HR:wght@100..400&display=swap" rel="stylesheet">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <!--Section1-->
        <div class="flex">
            <div class="page1">
                <img class="logo" src="project/images/cudaLogo.png">
                <!--Nav Bar-->
                <ul>
                    <li><a href="#home" class="active">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="#work">WORK</a></li>
                    <li><a href="#blog">BLOG</a></li>
                    <li><a href="#contact">CONTACT</a></li>               
                </ul>
                <h1 class="hpage1">Hi there! We are the new kids on the block<br>and we build awesome websites and mobile apps.</h1>
                <button type="button" class="buttonp1">WORK WITH US!</button>
            </div>
            
            <!--Section2-->
            <div class="page2">
                <div class="centered">
                    <h2>SERVICE WE PROVIDE</h2>
                    <hr> 
                    <p>We are working with both individuals and businesses from all over the globe <br>to create awesome websites and applications.</p>
                </div>
                <ul class="services">
                    <li>
                        <img src="project/images/iconFlag.png" alt="Branding" width="100px" height="100px" class="normal">
                        <h3>BRANDING</h3>
                        <p>Creating unique brand identities, building strong connections with your audience.</p>
                    </li>
                    <li>
                        <img src="project/images/iconPencil.png" alt="Design" width="80px" height="120px" class="upnormal">
                        <h3>DESIGN</h3>
                        <p>Crafting beautiful interfaces, ensuring excellent user experiences and functionality.</p>
                    </li>
                    <li>
                        <img src="project/images/iconGear.png" alt="Development" width="110px" height="100px" class="normal">
                        <h3>DEVELOPMENT</h3>
                        <p>We build powerful solutions tailored to your needs, ensuring efficiency and scalability.</p>
                    </li>
                    <li>
                        <img src="project/images/iconRocket.png" alt="Rocket Science" width="80px" height="120px" class="upnormal"> 
                        <h3>ROCKET SCIENCE</h3>
                        <p>Exploring innovative technologies and pushing the boundaries of what’s possible.</p>
                    </li>
                </ul>
                 
            </div>
            
            <!--Section3-->
            <div class="page3">
                <div class="centeredp3">
                    <h2>MEET OUT BEAUTIFUL TEAM</h2>
                    <hr> 
                    <p>We are a small team of Software engineers and developers , who helps people to get ideas</p>
                </div>
                <ul class="teamimg">
                    <li>
                        <img src="user (2).png" width="40%" height="40%" class="animation">
                        <h3>Adam Taylor</h3>
                        <h5>CEO / FrontEnd Developer</h5>
                        <p>Leads with innovation and <br>technical expertise in front-end development. <br>Her passion drives her to achieve excellence <br>and guide her team to success on every project.</p>
                        <ul id="icons">
                            <a href="mailto:@gmail.com" style="--i:1"><ion-icon name="mail-outline"></ion-icon></a>
                            <a href="https://github.com/" style="--i:2"><ion-icon name="logo-github"></ion-icon></a>
                            <a href="https://www.linkedin.com/in//" style="--i:3"><ion-icon name="logo-linkedin"></ion-icon></a>
                            <a href="https://www.facebook.com/" style="--i:3"><ion-icon name="logo-facebook"></ion-icon></a>
                        </ul>
                    </li>
                    
                    <li>
                        <img src="user (2).png" width="40%" height="40%" class="animation">
                        <h3>Sophia Mitchell</h3>
                        <h5>CEO / Software Engineer</h5>
                        <P>Excels in software engineering <br>with astrong focus on creating robust solutions. <br>Her technical skills and dedication drive <br>her to build efficient and scalable systems.</P>
                        <ul id="icons">
                            <a href="mailto:@gmail.com" style="--i:1"><ion-icon name="mail-outline"></ion-icon></ion-icon></a>
                            <a href="https://github.com/" style="--i:2"><ion-icon name="logo-github"></ion-icon></a>
                            <a href="https://www.linkedin.com/in//" style="--i:3"><ion-icon name="logo-linkedin"></ion-icon></a>
                            <a href="https://www.facebook.com/" style="--i:3"><ion-icon name="logo-facebook"></ion-icon></a>
                        </ul>
                    </li>
                    </ul>
            
            </div>
            
            <!--Section4-->
            <div class="page4">
                <h2>WE GOT SKILLS!</h2>
                <hr> 
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta eligendi debitis nam quo voluptatibus est. Aut, autem!<br>Hic animi recusandae cupiditate aperiam nesciunt rerum! Reiciendis dolores veritatis consequatur sequi architecto.</p>     
                <div class="container">
                    <div class="circular_progress" style="--clr: lightblue; --value:90">
                            <span class="perc">90%</span>
                            <h3>WEB DESIGN</h3>  
                    </div>
                    <div class="circular_progress" style="--clr: rgb(168, 22, 95); --value:75">
                        <span class="perc">75%</span>
                        <h3>HTML / CSS</h3>
                    </div>
                    <div class="circular_progress" style="--clr: rgb(13, 207, 191); --value:70">
                        <span class="perc">70%</span>
                        <h3>GRAPHIC DESIGN</h3>
                    </div>
                    <div class="circular_progress" style="--clr: rgb(243, 112, 52); --value:85">
                        <span class="perc">85%</span>
                        <h3>UI / UX</h3>
                    </div>
                </div>
            </div>
    
            <hr class="long">
            <!--Section5-->
            <div class="page5">
                <div class="centeredp5">
                    <h2>OUR PORTIFOLIO</h2>
                    <hr width="190" align="left"> 
                    <p>We are a small team of designers and developers , who helps people to get ideas</p>
                    <button type="button" class="active">ALL</button>
                    <button type="button">WEB</button>
                    <button type="button">APPS</button>
                    <button type="button">ICONS</button>
                </div>
                <ul class="projectssL1">
                   <li> 
                        <img src="project/images/portfolio_001.png" width="80%" height="80%">
                        <h5>ISOMETRIC PRESPECTIVE MOCK-UP</h5>
                    </li>
                    <li>
                        <img src="project/images/portfolio_002.png" width="80%" height="80%">
                        <H5>TIME ZONE APP UI</H5>
                    </li>
                </ul>
                <ul class="projectssL2">
                    <li>
                        <img src="project/images/portfolio_003.png" width="80%" height="80%">
                        <H5>VIRO MEDIA PLAYERS UI</H5>
                    </li>
                    <li>
                        <img src="project/images/portfolio_004.png" width="80%" height="80%">
                        <H5>BLOG/MAGAZINE FLAT UI KIT</H5>
                    </li>
                </ul>
                <button type="button" class="load">LOAD MORE PROJECTS</button>
                
            </div>
            
            <!--Section6-->
            <div class="page6">
                <div class="centeredp6">
                    <h2>WHAT PEOPLE SAY ABOUT US</h2>
                    <hr width="190" align="left"> 
                    <p class="outsidep">Our clients love us</p>
                </div>  
                <ul class="peopleL1">
                    <img src="project/images/management.png" width="10%" height="10%" class="leftimg"> 
                    <li>  
                        <p class="insidepl1">"Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque."</p>
                        <h3 class="h3l1">CHANEL IMAN</h3>
                        <h5 class="h5l1">CEO of Pinterest</h5>
                    </li>
                    <img src="project/images/management.png" width="10%" height="10%" class="leftimg"> 
                    <li>  
                        <p class="insidepl1">"Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta."</p>
                        <h3 class="h3l1">ADRIANA LIMA</h3>
                        <h5 class="h5l1">Founder of Instagram</h5>
                    </li>
                </ul>
                <ul class="peopleL2">
                    <img src="project/images/management.png" width="10%" height="10%" > 
                    <li> 
                        <p class="insidepl2">"Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta."</p>
                        <h3 class="h3l2">ANNE HATHAWAY</h3>
                        <h5 class="h5l2">Lead Designer at Behance</h5>
                    </li>
                    <img src="project/images/management.png" width="10%" height="10%" class="lin2"> 
                    <li>
                        <p class="insidepl2">"Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque."</p>
                        <h3 class="h3l2">EMMA STONE</h3>
                        <h5 class="h5l2">Co-Founder of Shazam</h5>
                    </li>
                </ul>
            </div>
            
            
            <!--Section7-->
            <div class="page7">
                <div class="wrapper">
                    <div class="main-content">
                        <div class="centeredp7">
                            <h2>GET IN TOUCH</h2>
                            <hr width="190" align="left"> 
                            <p>1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel:(202) 456-1111</p>
                            <form id="contactForm" method="post" action = "connect.php">
                                <div class="inline">
                                    <input type="text" placeholder="Your Name" name="name" required>
                                    <input type="email" placeholder="Your E-mail" name="email" required>
                                </div>
                                <br>
                                <input type="text" placeholder="Your Message" class="Message" name="message" required><br><br>
                                <!-- Add the submit button here -->
                                <button type="button" class="buttonp7">SEND MESSAGE</button>
                            </form>                                 
                        </div>
                    </div>                
                </div>
                <footer>
                    <div class="foot">
                        <ul>
                            <li><a href="https://www.facebook.com/">FaceBook</a></li>
                            <li><a href="https://www.twitter.com/">Twitter</a></li>
                            <li><a href="https://www.google.com/">Google+</a></li>
                            <li><a href="https://www.linkedin.com/">Linkedln</a></li>
                            <li><a href="https://www.behance.com/">Behance</a></li>
                            <li><a href="https://www.Dribbble.com/">Dribbble</a></li>
                            <li><a href="https://www.github.com/">GitHub</a></li>
                        </ul>
                    </div>
                </footer>
            </div>
            
            <script>
                document.querySelector('.buttonp7').addEventListener('click', function() {
                    document.getElementById('contactForm').submit();
                });
            </script>            
    </body>
</html>