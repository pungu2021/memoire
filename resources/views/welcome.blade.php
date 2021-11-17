<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my chat</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
</head>
<body>
    
    <div class="container-fluid">
          <div class="row">
                <div class="col-lg-8">
                     <figure>
                         <img src="{{Storage::url("images/ab2.jpg")}}" alt="photo acceuil" class="home-image">
                     </figure>
                     <div class="back-noir-image">
                           <div>
                                <p class="bien">WELCOME TO CHAT KTO OF <br> AFRIKODE </p>
                                <p class="bine-sous">
                                    Lorem ipsum dolor sit amet consectetur 
                                    adipisicing elit. Tempore dignissimos suscipit,
                                    ex impedit dolorum, natus totam autem cumque fugiat 
                                    in facere inventore dolores perferendis commodi est 
                                   es?
                                </p><br>
                                <figure>
                                    <img src="{{Storage::url("images/chat.png")}}" alt="" width="40px" height="40px">
                                    <img src="{{Storage::url("images/chat.png")}}" alt="" width="40px" height="40px">
                                    <img src="{{Storage::url("images/chat.png")}}" alt="" width="40px" height="40px">
                                    <img src="{{Storage::url("images/chat.png")}}" alt="" width="40px" height="40px">
                                    <img src="{{Storage::url("images/chat.png")}}" alt="" width="40px" height="40px">
                                </figure>
                           </div>
                     </div>
                </div>
                <div class="col-lg-4">
                   
                     <form action="/chat" class="myform" method="POST">
                        <div class="authentification">Authentification</div>
                        @csrf
                        <label for="au">your gmail</label>
                        <input type="text" class="form-control" placeholder=" gmail">
                        <label for="au">your password</label>
                        <input type="password" class="form-control" placeholder=" password">
                        <button class="btn-connection">Valider</button>
                     </form>
                </div>
          </div>
    </div>

 <script src="{{asset("js/app.js")}}"></script>
</body>
</html>