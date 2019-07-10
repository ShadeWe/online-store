<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Album example · Bootstrap</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/categories.css">
    </head>
    <body>
        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                                <li><a href="#" class="text-white">Like on Facebook</a></li>
                                <li><a href="#" class="text-white">Email me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                    <strong>online-store</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-group list-group-flush" style="cursor: pointer; -moz-user-select: none; -khtml-user-select: none; user-select: none; ">
                        <li class="list-group-item list-group-item-action">Телевизоры, аудио-видео, HI-FI</li>
                        <li class="list-group-item list-group-item-action">Ноутбуки и компьютерная техника</li>
                        <li class="list-group-item list-group-item-action">Техника для кухни</li>
                        <li class="list-group-item list-group-item-action">Бытовая техника для дома</li>
                        <li class="list-group-item list-group-item-action">Автотехника</li>
                        <li class="list-group-item list-group-item-action">Телефоны и планшеты</li>
                        <li class="list-group-item list-group-item-action">Фотоаппараты</li>
                        <li class="list-group-item list-group-item-action">Товары для спорта, дачи и отдыха</li>
                        <li class="list-group-item list-group-item-action">Аксессуары</li>
                    </ul>
                </div>
                <div class="col-md-9" style="padding: 20px;">
										@foreach($products as $product)
										<div class="product-unit">
											<div class="product-image"></div>
											<h5 class="card-title" style="padding: 10px 0 0 5px;"><strong>{{ $product->{'product-name'} }}</strong></h5>
											<p class="card-text" style="padding-left: 5px; margin-bottom: 7px; height: 50px;">{{ $product->short_desc }}</p>
											<div class="product-price" style="padding-left: 5px; margin-bottom: 7px;"><strong>{{ $product->{'product-price'} }} RUB</strong></div>
											<a href="#" style="float: right;"class="btn btn-primary">Get into it</a>
										</div>
										@endforeach
                </div>
            </div>
        </div>
        <!-- <footer class="text-muted">
            <div class="container">
              <p class="float-right">
                <a href="#">Back to top</a>
              </p>
            </div>
            </footer> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			</body>
	</html>
