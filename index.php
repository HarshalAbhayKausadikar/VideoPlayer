<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="resource\css\bootstrap.min.css">
    <script src="resource/js/slim.min.js"></script>
    <script src="resource/js/popper.min.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark" id="bg-color">
    <a class="navbar-brand" href="#">
      <img src="resource\black_logo.png" width="30" height="30" class="d-inline-block align-top" alt="" id="bg-color">
      EasyCode
    </a>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hi, Learner!
          </a>
          <div class="dropdown-menu" id="navbarDropdown" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" id="navbarDropdown" href="#">Home</a>
            <a class="dropdown-item" id="navbarDropdown" href="#">Courses</a>  
            <div class="dropdown-divider" id="navbarDropdown"></div>
            <a class="dropdown-item" id="navbarDropdown" href="#">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
    <h3 class="heading">Python Programming A to Z</h3>

    <div class="container">

        <div class="main-video">
            <div class="video">
                <video src="resource\video3.mp4" autoplay controls controlslist="nodownload"></video>
                <h3 class="title">01. Video Title goes here</h3>
            </div>
        </div>

        <div class="video-list">
            <div id="accordion">
                <div>
                  <div class="card-header" id="headingOne">
                    <h5>
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #1
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                            <div class="video-list">
                                <div class="vid active">
                                    <video src="resource\video3.mp4"></video>
                                    <h3 class="title">01. Video Title goes here</h3>
                                </div>
                                <div class="vid">
                                    <video src="resource\video2.mp4"></video>
                                    <h3 class="title">02. Video Title goes here</h3>
                                </div>
                                <div class="vid">
                                    <video src="resource\video3.mp4"></video>
                                    <h3 class="title">03. Video Title goes here</h3>
                                </div>
                                <div class="vid">
                                    <video src="resource\video5.mp4"></video>
                                    <h3 class="title">04. Video Title goes here</h3>
                                </div>
                            </div>
                    
                        </div>
                    </div>
                  </div>
                </div>
            <div id="accordion">
                <div>
                  <div class="card-header" id="headingOne">
                    <h5>
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                        Collapsible Group Item #2
                      </button>
                    </h5>
                  </div>

                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="video-list">
                            <div class="vid active">
                                <video src="resource\video3.mp4"></video>
                                <h3 class="title">01. Video Title goes here</h3>
                            </div>
                            <div class="vid">
                                <video src="resource\video2.mp4"></video>
                                <h3 class="title">02. Video Title goes here</h3>
                            </div>
                            <div class="vid">
                                <video src="resource\video3.mp4"></video>
                                <h3 class="title">03. Video Title goes here</h3>
                            </div>
                            <div class="vid">
                                <video src="resource\video5.mp4"></video>
                                <h3 class="title">04. Video Title goes here</h3>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
              
        </div>


        <!-- <div class="video-list">
            <div class="vid active">
                <video src="resource\video3.mp4"></video>
                <h3 class="title">01. Video Title goes here</h3>
            </div>
            <div class="vid">
                <video src="resource\video2.mp4"></video>
                <h3 class="title">02. Video Title goes here</h3>
            </div>
            <div class="vid">
                <video src="resource\video3.mp4"></video>
                <h3 class="title">03. Video Title goes here</h3>
            </div>
            <div class="vid">
                <video src="resource\video5.mp4"></video>
                <h3 class="title">04. Video Title goes here</h3>
            </div>
        </div> -->

    </div>

    


    <script>
        let listVideo = document.querySelectorAll('.video-list .vid');
        let mainVideo = document.querySelector('.main-video video');
        let title = document.querySelector('.main-video .title');
        console.log(title)

        listVideo.forEach(video => {
            video.onclick = () => {
                listVideo.forEach(vid => vid.classList.remove('active'));
                video.classList.add('active');

                if (video.classList.contains('active')) {
                    let src = video.children[0].getAttribute('src');
                    mainVideo.src = src;

                    let text = video.children[1].innerHTML;
                    console.log(video.children[1].innerHTML)
                    title.innerHTML = text;
                };
            }
        })
    </script>

</body>

</html>

 