<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>
    <h3 class="heading"> Video Gallery</h3>

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

 