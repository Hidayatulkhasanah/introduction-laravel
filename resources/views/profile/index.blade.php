<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hidaaa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("style/styles.css") }}" />
    <link rel="icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet" />
  </head>
  <body>
    @include('layout.navbar')
    <div class="top">
      <img class="top-cloud" src="{{ asset("img/cloud.png") }}" alt="cloud-img" />
      <h1>I'm Hidaa.</h1>
      <h2>a Fullstack Web Developer at Gits.id</h2>
      <img class="bottom-cloud" src="{{ asset("img/cloud.png") }}" alt="cloud-img" />
      <img class="mountain" src="{{ asset("img/mountain.png") }}" alt="mountain-img" />
    </div>

    <div class="middle-container">
      <div class="profile">
        <img src="{{ asset("img/profile.jpeg") }}" style="width: 120px"/>
        <h2>Hello.</h2>
        <p class="intro">Lorem ipsum dolor sit amet, vitae volutpat, dui conubia, dolor urna. Non auctor, montes nulla distinctio.</p>
      </div>
      <hr />
      <div class="skills">
        <h2>My Skills.</h2>
        <div class="skill-row">
          <img class="komputer" src="{{ asset("img/computer.png") }}" alt="computer-img" />
          <h3>Design & Development</h3>
          <p>Lorem ipsum dolor sit amet, quis in duis, iaculis id felis. Consectetuer vestibulum, nunc urna lectus, erat ligula. Hendrerit nam, lectus ante, ut lorem eros.</p>
        </div>
      </div>
      <hr />
      <div class="contact-me">
        <h2>Get In Touch</h2>
        <h3>Lorem ipsum dolor sit amet, non elit.</h3>
        <p class="contact-message">Lorem ipsum dolor sit amet, in quis, aenean amet. Phasellus sodales, tellus donec dui, ornare erat.</p>
        <a class="btn" href="mailto:name@email.com">CONTACT ME</a>
      </div>
    </div>

    <div class="bottom-container">
      <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
      <a class="footer-link" href="https://twitter.com/">Twitter</a>
      <a class="footer-link" href="https://www.appbrewery.co/">Website</a>
    </div>
  </body>
</html>
