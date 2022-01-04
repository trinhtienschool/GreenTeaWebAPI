<div class="card">
    <!--Card image-->
    <div class="view overlay">
        <img src="{{$img}}" class="card-img-top" alt="">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!--/.Card image-->
    <!--Card content-->
    <div class="card-body">

        <!--Title-->
        <h4 class="card-title darkgrey-text">
            <strong>{{$fName}}</strong>
        </h4>
        <hr>
        <!--Text-->
        <p class="font-small">{{$fDescription}}
        </p>
        <a href="#" class="black-text d-flex flex-row-reverse">
            <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
            </p>
        </a>
    </div>
    <!--/.Card content-->
</div>
