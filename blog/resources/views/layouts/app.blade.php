
<!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title> @yield('title') </title>
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 
        </head>
   
      <body>

      <nav class="navbar navbar-expand-lg" style="background-color: #1c1c31; ">
        <div class="container-fluid">
          <a style="color: #ffffff;" class="navbar-brand" href="#">ITI Blog</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a style="color: #ffffff;" class="nav-link active" aria-current="page" href="/posts">All Posts</a>
              </li>
            

            </ul>
          </div>
        </div>
      </nav>

              <div class='container'>

              <div class='text-danger'>
                        @yield("block")

              </div>

                <div style='background-color:yellow'>

                    @yield("content")
                </div>
                <div>
                  @yield('main')
              </div>
            

                </div>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

      </body>
      </html>
