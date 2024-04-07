<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            background: rgb(9,8,9);
            background: linear-gradient(137deg, rgba(9,8,9,1) 28%, rgba(72,129,147,1) 73%);
            margin: 0 auto; 
            padding: 20px; 
            box-sizing: border-box; 
        }

        section {
            max-width: 1440px;
            max-height: 1500px;
            padding: 20px;
            width: 100%; 
            height: 100vh;
            box-sizing: border-box; 
        }

        p {
            margin-top: 362px;
            color: white;
        }
        
        p .name {
            font-style: Kavoon;
            font-size: 70px;
            background: #FF83FA;
            background: linear-gradient(to right, #FF83FA 0%, #96DBEA 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        p .info {
            font-style: Kotta One;
            color: white;
            font-size: 70px;
        }   
        
        p .heytext {
            font-style: Kotta One;
            color: white;
            font-size: 35px;
        }

        .section1 {
            border-bottom: 3px solid white;
            
        }

        .section2 {
            border-bottom: 3px solid white;
        }
        nav {
            position: fixed;
            top: 20px;
            right: 20px;
            font-size: 30px;
            z-index: 1;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0; 
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li:last-child {
            margin-right: 0;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        .myimage {
            width: 351px;
            height: 413px;
            margin-top: 221px;
            border-radius: 10px;
            position: absolute;
            top: 0;
            right: 80px;
        }
        .myimage2 {
            width: 390px;
            height: 500px;
            margin-top: 150px;
            border-radius: 10px;
            position: absolute;
            left: 20px;
        }
        .abouttext{
            text-decoration: underline;
            font-size: 70px;
            font-weight: bold;
            color: white; 
            position: absolute;
            margin-top: 90px;
            left: 430px;
        }
        .aboutcontent{
            text-align: justify;
            font-size:25px;
            color: white; 
            font-weight: medium;
            margin-top: 200px;
            position: absolute;
            left: 430px; 
            width:800px; 
        }
        .contact{
            text-align: justify;
            font-size:35px;
            color: white; 
            margin-top: 410px;
            position: absolute;
            left: 430px; 
            width: 500px; 
        }
        .contact-icons {
        position: absolute;
        left: 410px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        }
        .ig {
            
            margin-top: 70px;
            width: 90px;
            height: 50px;
        }

        .fb {
            margin-top: 10px;
            width: 40px;
            height: 40px;
        }

        .tw {
            margin-top: 15px;
            width: 45px;
            height: 40px;
        }

        .gm {
            margin-top: 10px;
            width: 60px;
            height: 50px;
        }
        .igtext{
            position: absolute;
            left: 490px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 100px;
            font-size: 25px;
        }
        .fbtext{
            position: absolute;
            left: 490px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 155px;
            font-size: 25px;
        }
        .twtext{
            position: absolute;
            left: 490px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 210px;
            font-size: 25px;
        }
        .gmtext{
            position: absolute;
            left: 490px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 260px;
            font-size: 25px;
        }
        body::-webkit-scrollbar {
            width: 0; 
            background-color: rgba(255, 255, 255, 0.1); 
        }

        body::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.4); 
            border-radius: 5px;
        }
        .section3 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 1300px;
        }

        .project-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            text-align: center;
        }

        .projecttext {
            font-family: Arial;
            text-decoration: underline;
            font-size: 70px;
            font-weight: bold;
            margin-top: -120vh;
        }
        .projectimage {
            position: absolute;
            left: 90px;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }
        .angelsimage{
            margin-top: 50px;
            border-radius: 15px;
            width: 400px;
            height: auto;
        }
        .queueimage{
            margin-top: 70px;
            border-radius: 15px;
            width: 400px;
            height: auto;
        }
        .blenderimage{
            margin-top: 50px;
            border-radius: 15px;
            width: 400px;
            height: auto;
        }
        .ticketimage{
            margin-top: 60px;
            border-radius: 15px;
            width: 400px;
            height: auto;
        }
        .description{
            text-align: justify;
            font-size:25px;
            color: white; 
            margin-top: -90vh;
            position: absolute;
            left: 520px; 
            width: 900px; 

        }
        .description2{
            text-align: justify;
            font-size:25px;
            color: white; 
            margin-top: -20vh;
            position: absolute;
            left: 520px; 
            width: 900px;
            
        }
        .description3{
            text-align: justify;
            font-size:25px;
            color: white; 
            margin-top: 350px;
            position: absolute;
            left: 520px; 
            width: 900px;
            
        }
        .description4{
            text-align: justify;
            font-size:25px;
            color: white; 
            margin-top: 900px;
            position: absolute;
            left: 520px; 
            width: 900px;
            
        }
        footer {
            text-align: center;
            font-size:25px;
            color: white; 
            margin-top: 945px;
            position: absolute;
        }

        .animated {
            animation-duration: 2s;
            animation-fill-mode: both;
        }

        
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#projects">Projects</a></li>
        </ul>
    </nav>
    <section id="home" class="section1">
        <p class="textanimate"><span class="heytext">Hey it's me<br></span>
            <span class="name">Angelico Martin</span><br>
            <span class="info">FULL-STACK ALDOUS</span>
        </p>
        <img src="/images/me.jpg" alt="myphoto" class="myimage">
    </section>

    <section id="about" class="section2">
    <img src="/images/me.jpg" alt="myphoto2" class="myimage2">
    <p class="abouttext">About Me</p>
    <p class="aboutcontent">
        Welcome! I'm Angelico Martin, and I'm excited to share a bit about myself with you.
        I love spending time playing online games, chilling at home, and listening to music. 
        Anime is another passion of mine—I enjoy getting lost in its captivating worlds.
        I prefer peace and quiet, as interruptions can throw me off. While I sometimes struggle 
        with confidence, I'm on a journey of self-discovery and growth.
    </p>
    <p class="contact">CONTACT ME:<p>
    <div class="contact-icons">
    <img src="/images/ig.png" alt="instagram" class="ig">
    <img src="/images/fb.png" alt="facebook" class="fb">
    <img src="/images/tw.png" alt="twitter" class="tw">
    <img src="/images/gm.png" alt="gmail" class="gm">
    </div>
   
    <p class="igtext"> supremo_dp <p>
    <p class="fbtext"> Angelico Martin <p>
    <p class="twtext"> @larpi <p>
    <p class="gmtext"> clemena.angelicomartin@cec.edu.ph <p>
    </section>

    <section id="projects" class="section3">
    <div class="project-container">
    <p class="projecttext">My Project's</p>
    <div class="projectimage">
        <img src="images/angels.png" alt="angels" class="angelsimage">
        <img src="images/queue.png" alt="queue" class="queueimage">
        <img src="images/blender.jpg" alt="blender" class="blenderimage">
        <img src="images/ticket.png" alt="ticket" class="ticketimage">
    </div>
    <p class="description"> The Angel's Burger Inventory Management System, built with Laravel. This system allows users to easily add, update, and remove products from the inventory, ensuring accuracy and efficiency. Developed to showcase my skills in web development and database management, it demonstrates my ability to create user-friendly applications tailored to specific business needs. Thank you for exploring this project, and feel free to discover more about my work in my portfolio.</p>
    <p class="description2"> Queuing System a modern solution for managing queues at student service counters. Developed using Laravel, PHP, Ajax, and more, this system allows students to enter their information beforehand, streamlining the process and reducing wait times. By providing real-time updates and dynamic queue organization, it enhances efficiency and user experience. Thank you for exploring this project, and feel free to discover more about my work in my portfolio.</p>
    <p class="description3"> a captivating Isometric 3D House created using Blender. This project showcases my skills in 3D modeling and rendering, presenting a visually stunning representation of a house from a unique perspective. Through meticulous detailing and realistic textures, I've brought the design to life, demonstrating my ability to create immersive environments that captivate viewers. Thank you for exploring this project, and feel free to discover more about my work in my portfolio.</p>
    <p class="description4"> a Python Ticketing Management System simplifying ticket booking for various destinations. This system, developed using Python 3, offers users an easy-to-use interface to select destinations, check transaction history, and calculate costs. Thank you for exploring this project, and feel free to discover more about my work in my portfolio.</p>
    <footer>
    <p> © 2024 All Rights Reserved </p>
    </footer>
    </div>
    </section>
    <script>
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= document.documentElement.clientHeight &&
            rect.right <= document.documentElement.clientWidth
        );
    }

    function handleScrollAnimations() {
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            if (isInViewport(section)) {
                section.classList.add('animate__animated');
                if (section.id === 'home') {
                    section.classList.add('animate__fadeInUp');
                } else if (section.id === 'about') {
                    section.classList.add('animate__fadeInLeft');
                } else if (section.id === 'projects') {
                    section.classList.add('animate__fadeInRight');
                }
            } else {
                section.classList.remove('animate__animated', 'animate__fadeInUp', 'animate__fadeInLeft', 'animate__fadeInRight');
            }
        });
    }

    handleScrollAnimations();

    window.addEventListener('scroll', handleScrollAnimations);
</script>

</body>
</html>
