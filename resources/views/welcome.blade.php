<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="csrf_token" content="{{ csrf_token() }}"> -->
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 mb-5">
    <form action="/message/create" method="POST">
      <!-- @csrf -->
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="message" class="form-label">Message:</label>
    <input type="text" class="form-control" id="message" placeholder="Enter message" name="message">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Send Message</button>
</form> 
<div class="container mt-5 mb-5">
<div >
  <h2 class="d-flex p-3 align-items-center justify-content-center">Messages</h6> 
</div>
@foreach($data as $message)
<div class="container mt-5 mb-5">
<div class="row height d-flex justify-content-center align-items-center">
  <div class="col-md-7">
    <div class="card">
      <div class="mt-2">
        <div class="d-flex flex-row p-3">
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex flex-row align-items-center">
                  <span class="mr-2 fw-bold color-grey">{{ $message->name }}</span>
                </div>
                <small>{{ $message->created_at }}</small>
          </div>
          <div>
                  <span class="text-light-emphasis">{{ $message->email }}</span>
                </div>
          <p class="text-justify comment-text mb-0">{{ $message->message }}</p>
        </div>
      </div>
    </div>
    
  </div>
  
</div>
</div>

</div>
@endforeach
</div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
  </body>
</html>