<?php
  require 'lib/site.inc.php';
  $projects = (new Bogdan\Projects($site))->all();
?>

<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bogdan Pozderca">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="icon" href="img/favicon.ico" type="image/x-icon"> -->
    <title>Bogdan Pozderca</title>

    <link rel="stylesheet" type="text/css" href="assets/stylesheets/app.css">
  </head>
  <body>
    <nav>
      <ul>
        <li class="bogdan"><img class="icon" src="assets/images/bogdan.png" alt="Bogdan Pozderca">
          <span>Bogdan</span>
        </li>
        <li>
          <a href="https://www.linkedin.com/in/bogdanpozderca">LinkedIn</a>
        </li>
        <li>
          <a href="https://twitter.com/bogdanpozderca">Twitter</a>
        </li>
        <li>
          <a href="https://github.com/bogdanpozderca">Github</a>
        </li>
      </ul>
    </nav>

    <section id="intro">
      <h1>Bogdan Pozderca</h1>
      <div id="quick-links">
        <a target="_blank" href="https://drive.google.com/file/d/0B070VDH8d-MLSV8tX0hocmdVOG8/view?usp=sharing">Resume</a>
        <a href="mailto:pozderca@msu.edu">Contact Me</a>
      </div>
    </section>

    <section class="grid center">
      <h1 class="header">
        <span class="title">Personal & Contributed Projects</span>
      </h1>

      <div class="container">

        <?php foreach ($projects as $project) { ?>
        <div class="element project" data-color="<?php echo $project->getColor() ?>">
          <div class="project-name" data-color="<?php echo $project->getColor() ?>" >
            <?php echo $project->getTitle() ?>
          </div>
          <p class="project-description">
            <?php echo $project->getDescription() ?>
          </p>
          <div class="project-link-container">
          <?php
            if ($project->getGithub() != null) { ?>
              <a target="_blank" href="<?php echo $project->getGithub() ?>" class="project-link" data-color="<?php echo $project->getColor() ?>">
                <svg version="1.1" id="github"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     width="20px"
                     height="20px"
                     viewBox="0 0 438.549 438.549"
                     style="enable-background:new 0 0 438.549 438.549;"
                     xml:space="preserve">
                  <g>
                  	<path d="M409.132,114.573c-19.608-33.596-46.205-60.194-79.798-79.8C295.736,15.166,259.057,5.365,219.271,5.365   c-39.781,0-76.472,9.804-110.063,29.408c-33.596,19.605-60.192,46.204-79.8,79.8C9.803,148.168,0,184.854,0,224.63   c0,47.78,13.94,90.745,41.827,128.906c27.884,38.164,63.906,64.572,108.063,79.227c5.14,0.954,8.945,0.283,11.419-1.996   c2.475-2.282,3.711-5.14,3.711-8.562c0-0.571-0.049-5.708-0.144-15.417c-0.098-9.709-0.144-18.179-0.144-25.406l-6.567,1.136   c-4.187,0.767-9.469,1.092-15.846,1c-6.374-0.089-12.991-0.757-19.842-1.999c-6.854-1.231-13.229-4.086-19.13-8.559   c-5.898-4.473-10.085-10.328-12.56-17.556l-2.855-6.57c-1.903-4.374-4.899-9.233-8.992-14.559   c-4.093-5.331-8.232-8.945-12.419-10.848l-1.999-1.431c-1.332-0.951-2.568-2.098-3.711-3.429c-1.142-1.331-1.997-2.663-2.568-3.997   c-0.572-1.335-0.098-2.43,1.427-3.289c1.525-0.859,4.281-1.276,8.28-1.276l5.708,0.853c3.807,0.763,8.516,3.042,14.133,6.851   c5.614,3.806,10.229,8.754,13.846,14.842c4.38,7.806,9.657,13.754,15.846,17.847c6.184,4.093,12.419,6.136,18.699,6.136   c6.28,0,11.704-0.476,16.274-1.423c4.565-0.952,8.848-2.383,12.847-4.285c1.713-12.758,6.377-22.559,13.988-29.41   c-10.848-1.14-20.601-2.857-29.264-5.14c-8.658-2.286-17.605-5.996-26.835-11.14c-9.235-5.137-16.896-11.516-22.985-19.126   c-6.09-7.614-11.088-17.61-14.987-29.979c-3.901-12.374-5.852-26.648-5.852-42.826c0-23.035,7.52-42.637,22.557-58.817   c-7.044-17.318-6.379-36.732,1.997-58.24c5.52-1.715,13.706-0.428,24.554,3.853c10.85,4.283,18.794,7.952,23.84,10.994   c5.046,3.041,9.089,5.618,12.135,7.708c17.705-4.947,35.976-7.421,54.818-7.421s37.117,2.474,54.823,7.421l10.849-6.849   c7.419-4.57,16.18-8.758,26.262-12.565c10.088-3.805,17.802-4.853,23.134-3.138c8.562,21.509,9.325,40.922,2.279,58.24   c15.036,16.18,22.559,35.787,22.559,58.817c0,16.178-1.958,30.497-5.853,42.966c-3.9,12.471-8.941,22.457-15.125,29.979   c-6.191,7.521-13.901,13.85-23.131,18.986c-9.232,5.14-18.182,8.85-26.84,11.136c-8.662,2.286-18.415,4.004-29.263,5.146   c9.894,8.562,14.842,22.077,14.842,40.539v60.237c0,3.422,1.19,6.279,3.572,8.562c2.379,2.279,6.136,2.95,11.276,1.995   c44.163-14.653,80.185-41.062,108.068-79.226c27.88-38.161,41.825-81.126,41.825-128.906   C438.536,184.851,428.728,148.168,409.132,114.573z" />
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g></svg>
              </a>
          <?php
            }
            if ($project->getDemo() != null) { ?>
              <a target="_blank" href="<?php echo $project->getDemo() ?>" class="project-link" data-color="<?php echo $project->getColor() ?>">
                <svg version="1.1" id="link"
                     xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"
                     x="0px" y="0px"
                     width="20px"
                     height="20px"
                	   viewBox="0 0 80 80"
                     style="enable-background:new 0 0 80 80;"
                     xml:space="preserve">
                  <g>
                  	<g>
                  		<path d="M29.298,63.471l-4.048,4.02c-3.509,3.478-9.216,3.481-12.723,0
                  			c-1.686-1.673-2.612-3.895-2.612-6.257s0.927-4.585,2.611-6.258l14.9-14.783c3.088-3.062,8.897-7.571,13.131-3.372
                  			c1.943,1.93,5.081,1.917,7.01-0.025c1.93-1.942,1.918-5.081-0.025-7.009c-7.197-7.142-17.834-5.822-27.098,3.37L5.543,47.941
                  			C1.968,51.49,0,56.21,0,61.234s1.968,9.743,5.544,13.292C9.223,78.176,14.054,80,18.887,80c4.834,0,9.667-1.824,13.348-5.476
                  			l4.051-4.021c1.942-1.928,1.953-5.066,0.023-7.009C34.382,61.553,31.241,61.542,29.298,63.471z M74.454,6.044
                  			c-7.73-7.67-18.538-8.086-25.694-0.986l-5.046,5.009c-1.943,1.929-1.955,5.066-0.025,7.009s5.068,1.954,7.011,0.025l5.044-5.006
                  			c3.707-3.681,8.561-2.155,11.727,0.986c1.688,1.673,2.615,3.896,2.615,6.258c0,2.363-0.928,4.586-2.613,6.259l-15.897,15.77
                  			c-7.269,7.212-10.679,3.827-12.134,2.383c-1.943-1.929-5.08-1.917-7.01,0.025s-1.918,5.081,0.025,7.009
                  			c3.337,3.312,7.146,4.954,11.139,4.954c4.889,0,10.053-2.462,14.963-7.337l15.897-15.77C78.03,29.083,80,24.362,80,19.338
                  			C80,14.316,78.03,9.595,74.454,6.044z"/>
                  	</g>
                  </g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                  <g></g>
                </svg>
              </a>
          <?php
            } ?>
          </div>
        </div>
        <?php } ?>

      </div>
    </section>

    <section class="footer">
      <p class="question">
        <span class="text">Hey, did you notice there's no JS on here</span>
        <span class="mark">?</span>
      </p>
    </section>
    <!-- <div id="copyright">© Copyright 2015 Bogdan Pozderca</div> -->
    <script src="assets/javascripts/index.js" type="text/javascript"></script>
  </body>
</html>
