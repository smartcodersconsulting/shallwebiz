<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="./images/img_competitive_pricing.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 1</h5>
                <p>Sliding Works</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/img_findJob.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 2</h5>
                <p>Sliding Works</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="./images/img_business.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>Image 3</h5>
                <p>Sliding Works</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container" style="padding-top:10px;">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img-top" src="./images/chicago.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img-top" src="./images/chicago.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <img class="card-img-top" src="./images/chicago.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    </div>
<div class="container" style="padding-top:20px">
    <div class="row">
        <div class="col-sm-12">
            <div id="pageTable" style="min-height:300px; padding-bottom:100px;" ><?php include 'LatestOpening.php' ;?></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
    });
    $('.carousel').carousel({
        interval: 2000
    });
</script>