<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>AHBARAK.COM | Buy Laser Toners & Inks in Egypt.</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>


        <?php require_once './navigation.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">HP</a></li>

                    </ol>
                </div>
            </div>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-lg-3 whitebg py-3 ">
                    <div class="sticky-top">
                        <h1>HP Supplies, Toners & Inks</h1>
                    <img src="https://dummyimage.com/250x250/0000/fff.jpg&text=HP" alt="" class="img-thumbnail">
                    <br><br>
                    Here we will put seo text about HP products and ahbarak 
                    </div>
                </div>
                <div class="col-lg-9 justify-content-start">


                    <div class="col-lg-12 mb-3">
                        <div class="col-lg-12 d-flex-xs flex-row text-center">
                            <a href="#">
                                <img src="https://dummyimage.com/150x150/ffffff/5e9c00.jpg&text=Black-LaserJet" alt="" class="img-thumbnail">
                            </a>

                            <a href="#">
                                <img src="https://dummyimage.com/150x150/ffffff/5e9c00.jpg&text=Color-LaserJet" alt="" class="img-thumbnail">
                            </a>

                            <a href="#">
                                <img src="https://dummyimage.com/150x150/ffffff/5e9c00.jpg&text=Inkjet" alt="" class="img-thumbnail">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="col-3">
                            <select name="sort" id="sort" class="form-control form-control-sm">
                                <option value="0">Sort by</option>
                                <option value="0">Last added</option>
                                <option value="0">First added</option>
                                <option value="0">Lowest price</option>
                                <option value="0">Highest price</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-12 card-columns">

                        <?php for ($i = 0; $i < 18; $i++) { ?>
                            <div class="card" >
                                <a href="product.php"><img class="card-img-top" src="https://dummyimage.com/318x180/0000/fff.jpg&text=product-img" alt="Card image cap"></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="product.php">Card title</a></h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="product.php" class="btn btn-primary invisible-sm-down">Go somewhere</a>
                                </div>
                            </div>
                        <?php } ?>


                    </div>

                    <div class="col-lg-12">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>





            </div>


        </div>





        <div class="container-fluid darkbg mt-4 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Buy online all your printer's toners & inks from ahbarak.com</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        column 1
                    </div>
                    <div class="col">
                        Column 2
                    </div>
                    <div class="col">
                        Column 3
                    </div>
                </div>
            </div>

        </div>






        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('.carousel').carousel();
        </script>
    </body>
</html>
