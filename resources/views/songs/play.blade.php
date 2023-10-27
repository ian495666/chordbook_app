@extends('layouts.app')

@section('content')


<div class="p-5 m-md-5">
    <img src="{{asset('/storage/images/'.str_replace("public/","",$song->image))}}" alt="logo" style="width: 100px; height: 100px;">
    <div class="media-body" >
        <h5 class="mt-0">
            {{$song->song_title}}
        </h5>
        <h6>{{$song->artist}}</h6>
        {{$song->album_title}}
        {{$song->release_year}}
    </div>
    <div class="d-flex justify-content-start bd-highlight mb-2" style="width: 100%">
        <br>
        <div style="width: 100%">
           <embed src="{{asset('/storage/files/'.str_replace("public/","",$song->song_file))}}"
            style="width:100%; height:700px" type="">
        </div>
        <div class="d-flex flex-column" style="width: 100%">
            <div class="bg-light p-2 text-black" style="width:100%; height:70%">
                  <div id="myDIVab" style="display: none">
                    <ins class="scales_chords_api" chord="ab" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm" style="display: none">
                    <ins class="scales_chords_api" chord="g#m" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab6" style="display: none">
                    <ins class="scales_chords_api" chord="ab6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab7" style="display: none">
                    <ins class="scales_chords_api" chord="ab7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVab9" style="display: none">
                    <ins class="scales_chords_api" chord="ab9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="ab9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm6" style="display: none">
                    <ins class="scales_chords_api" chord="g#m6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsm7" style="display: none">
                    <ins class="scales_chords_api" chord="g#m7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#m7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVabM7" style="display: none">
                    <ins class="scales_chords_api" chord="abM7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="abM7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVgsdim" style="display: none">
                    <ins class="scales_chords_api" chord="g#dim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="g#dim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVabsus" style="display: none">
                    <ins class="scales_chords_api" chord="absus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 1st row------------------------------------------------------------------ --}}
                  <div id="myDIVa" style="display: none">
                    <ins class="scales_chords_api" chord="a" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam" style="display: none">
                    <ins class="scales_chords_api" chord="am" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa6" style="display: none">
                    <ins class="scales_chords_api" chord="a6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa7" style="display: none">
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVa9" style="display: none">
                    <ins class="scales_chords_api" chord="a9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam6" style="display: none">
                    <ins class="scales_chords_api" chord="am6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVam7" style="display: none">
                    <ins class="scales_chords_api" chord="am7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="am7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVaM7" style="display: none">
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="a7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVadim" style="display: none">
                    <ins class="scales_chords_api" chord="adim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="adim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVasus" style="display: none">
                    <ins class="scales_chords_api" chord="asus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="asus" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 2nd row------------------------------------------------------------------ --}}
                  <div id="myDIVbb" style="display: none">
                    <ins class="scales_chords_api" chord="bb" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm" style="display: none">
                    <ins class="scales_chords_api" chord="bbm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb6" style="display: none">
                    <ins class="scales_chords_api" chord="bb6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb7" style="display: none">
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb9" style="display: none">
                    <ins class="scales_chords_api" chord="bb9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm6" style="display: none">
                    <ins class="scales_chords_api" chord="bbm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbm7" style="display: none">
                    <ins class="scales_chords_api" chord="bbm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbm7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbb7" style="display: none">
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bb7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbdim" style="display: none">
                    <ins class="scales_chords_api" chord="bbdim" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbdim" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbbsus" style="display: none">
                    <ins class="scales_chords_api" chord="bbsus" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bbsus" instrument="guitar" output="sound"></ins>
                  </div>
{{-- 3rd row------------------------------------------------------------------ --}}
                  <div id="myDIVb" style="display: none">
                    <ins class="scales_chords_api" chord="b" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm" style="display: none">
                    <ins class="scales_chords_api" chord="bm" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb6" style="display: none">
                    <ins class="scales_chords_api" chord="b6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb7" style="display: none">
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b7" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVb9" style="display: none">
                    <ins class="scales_chords_api" chord="b9" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="b9" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm6" style="display: none">
                    <ins class="scales_chords_api" chord="bm6" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm6" instrument="guitar" output="sound"></ins>
                  </div>
                  <div id="myDIVbm7" style="display: none">
                    <ins class="scales_chords_api" chord="bm7" instrument="guitar" output="image" output="sound" width="700px;" height="500px;" nolink="true"></ins>
                    <ins class="scales_chords_api" chord="bm7" instrument="guitar" output="sound"></ins>
                  </div>
            </div>
            <div class="bg-secondary p-2 d-flex flex-column text-black" style="width:100%; height:30%">

                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="ab()" class="btn btn-light">Ab</button>
                    <button type="button" onclick="gsm()" class="btn btn-light">G#m</button>
                    <button type="button" onclick="ab6()" class="btn btn-light">Ab6</button>
                    <button type="button" onclick="ab7()" class="btn btn-light">Ab7</button>
                    <button type="button" onclick="ab9()" class="btn btn-light">Ab9</button>
                    <button type="button" onclick="gsm6()" class="btn btn-light">G#m6</button>
                    <button type="button" onclick="gsm7()" class="btn btn-light">G#m7</button>
                    <button type="button" onclick="abM7()" class="btn btn-light">AbM7</button>
                    <button type="button" onclick="gsdim()" class="btn btn-light">G#dim</button>
                    <button type="button" onclick="absus()" class="btn btn-light">Absus</button>
                  </div>

                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="a()" class="btn btn-light">A</button>
                    <button type="button" onclick="am()" class="btn btn-light">Am</button>
                    <button type="button" onclick="a6()" class="btn btn-light">A6</button>
                    <button type="button" onclick="a7()" class="btn btn-light">A7</button>
                    <button type="button" onclick="a9()" class="btn btn-light">A9</button>
                    <button type="button" onclick="am6()" class="btn btn-light">Am6</button>
                    <button type="button" onclick="am7()" class="btn btn-light">Am7</button>
                    <button type="button" onclick="aM7()" class="btn btn-light">A7</button>
                    <button type="button" onclick="adim()" class="btn btn-light">Adim</button>
                    <button type="button" onclick="asus()" class="btn btn-light">Asus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="bb()" class="btn btn-light">Bb</button>
                    <button type="button" onclick="bbm()" class="btn btn-light">Bbm</button>
                    <button type="button" onclick="bb6()" class="btn btn-light">Bb6</button>
                    <button type="button" onclick="bb7()" class="btn btn-light">Bb7</button>
                    <button type="button" onclick="bb9()" class="btn btn-light">Bb9</button>
                    <button type="button" onclick="bbm6()" class="btn btn-light">Bbm6</button>
                    <button type="button" onclick="bbm7()" class="btn btn-light">Bbm7</button>
                    <button type="button" onclick="bb7()" class="btn btn-light">Bb7</button>
                    <button type="button" onclick="bbdim()" class="btn btn-light">Bbdim</button>
                    <button type="button" onclick="bbsus()" class="btn btn-light">Bbsus</button>
                  </div>
                  <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                    <button type="button" onclick="b()" class="btn btn-light">B</button>
                    <button type="button" onclick="bm()" class="btn btn-light">Bm</button>
                    <button type="button" onclick="b6()" class="btn btn-light">B6</button>
                    <button type="button" onclick="b7()" class="btn btn-light">B7</button>
                    <button type="button" onclick="b9()" class="btn btn-light">B9</button>
                    <button type="button" onclick="bm6()" class="btn btn-light">Bm6</button>
                    <button type="button" onclick="bm7()" class="btn btn-light">Bm7</button>
                    <button type="button" onclick="bb7()" class="btn btn-light"></button>
                    <button type="button" onclick="bbdim()" class="btn btn-light"></button>
                    <button type="button" onclick="bbsus()" class="btn btn-light"></button>
                  </div>

                  <script>

                  function bm7() {
                    var x = document.getElementById("myDIVbm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bm6() {
                    var x = document.getElementById("myDIVbm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b9() {
                    var x = document.getElementById("myDIVb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b7() {
                    var x = document.getElementById("myDIVb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b6() {
                    var x = document.getElementById("myDIVb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bm() {
                    var x = document.getElementById("myDIVbm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function b() {
                    var x = document.getElementById("myDIVb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 3rd row------------------------------------------------------------------
                  function bbsus() {
                    var x = document.getElementById("myDIVbbsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbdim() {
                    var x = document.getElementById("myDIVbbdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb7() {
                    var x = document.getElementById("myDIVbb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm7() {
                    var x = document.getElementById("myDIVbbm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm6() {
                    var x = document.getElementById("myDIVbbm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb9() {
                    var x = document.getElementById("myDIVbb9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb7() {
                    var x = document.getElementById("myDIVbb7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb6() {
                    var x = document.getElementById("myDIVbb6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bbm() {
                    var x = document.getElementById("myDIVbbm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function bb() {
                    var x = document.getElementById("myDIVbb");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

// 2st row------------------------------------------------------------------
                  function asus() {
                    var x = document.getElementById("myDIVasus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function adim() {
                    var x = document.getElementById("myDIVadim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function aM7() {
                    var x = document.getElementById("myDIVaM7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am7() {
                    var x = document.getElementById("myDIVam7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am6() {
                    var x = document.getElementById("myDIVam6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a9() {
                    var x = document.getElementById("myDIVa9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a7() {
                    var x = document.getElementById("myDIVa7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a6() {
                    var x = document.getElementById("myDIVa6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function am() {
                    var x = document.getElementById("myDIVam");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function a() {
                    var x = document.getElementById("myDIVa");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }
// 1st row------------------------------------------------------------------
                  function absus() {
                    var x = document.getElementById("myDIVabsus");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsdim() {
                    var x = document.getElementById("myDIVgsdim");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function abM7() {
                    var x = document.getElementById("myDIVabM7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm7() {
                    var x = document.getElementById("myDIVgsm7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm6() {
                    var x = document.getElementById("myDIVgsm6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab9() {
                    var x = document.getElementById("myDIVab9");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab7() {
                    var x = document.getElementById("myDIVab7");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab6() {
                    var x = document.getElementById("myDIVab6");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function gsm() {
                    var x = document.getElementById("myDIVgsm");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }

                  function ab() {
                    var x = document.getElementById("myDIVab");
                    if (x.style.display === "none") {
                      x.style.display = "block";
                    } else {
                      x.style.display = "none";
                    }
                  }
                  </script>

            </div>
        </div>
    </div>
</div>


@endsection
