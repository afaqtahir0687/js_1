@extends('layouts.app')

@section('contents')
  <style>
    #slideshow {
      max-width: 100%;
      position: relative;
    }
    #slideshow img {
      max-width: 100%;
      display: none;
    }
    #slideshow .caption {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
      padding: 10px;
      text-align: center;
    }
    .btn {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="slideshow">
    <img src="https://img.freepik.com/premium-psd/laptop-psd-mockup-with-gradient-led-light_53876-138283.jpg" style="height: 100px; width:100px" alt="Image 1">
   
    <!-- Add more images as needed -->

    <div class="caption">Caption for Image 1</div>
  </div>
  <button class="btn" id="prev">Previous</button>
  <button class="btn" id="pause">Pause</button>
  <button class="btn" id="play">Play</button>
  <button class="btn" id="next">Next</button>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      var currentIndex = 0;
      var images = $("#slideshow img");
      var captions = [
        "Caption for Image 1",
        "Caption for Image 2",
        "Caption for Image 3"
        // Add more captions as needed
      ];

      function showImage(index) {
        images.hide();
        images.eq(index).show();
        $(".caption").text(captions[index]);
        currentIndex = index;
      }

      var interval;
      function startSlideshow() {
        interval = setInterval(function() {
          var nextIndex = (currentIndex + 1) % images.length;
          showImage(nextIndex);
        }, 3000); // Change image every 3 seconds
      }

      startSlideshow();

      $("#prev").click(function() {
        var prevIndex = (currentIndex - 1 + images.length) % images.length;
        showImage(prevIndex);
        clearInterval(interval);
        startSlideshow();
      });

      $("#next").click(function() {
        var nextIndex = (currentIndex + 1) % images.length;
        showImage(nextIndex);
        clearInterval(interval);
        startSlideshow();
      });

      $("#pause").click(function() {
        clearInterval(interval);
      });

      $("#play").click(function() {
        startSlideshow();
      });
    });
  </script>

@endsection
