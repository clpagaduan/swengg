<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href={{asset('css/greencat.css')}} type="text/css"> </head>

<body>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <h1 class="">User - {{strtoupper(Auth::user()->username)}}
            <br> </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="/profile/{{Auth::user()->id}}">
                <i class="fa fa-user fa-fw"></i>Profile &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
            <li class="nav-item">
              <a href="/swipematch" class="nav-link disabled">
                <i class="fa fa-fw fa-search"></i>Browse &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="/user-match">
                <i class="fa fa-fw fa-inbox"></i>Matches &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="/logout">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
          </ul>
        </div>
        <div class="justify-content-center col-md-4">
          <div class="card">
            <img class="card-img" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image">
            <div class="card-img-overlay d-flex justify-content-center align-items-center"></div>
          </div>
          <form class="">
            <ul class="pagination d-flex flex-row justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#">
                  <span>«</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <span>»</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
            <div class="form-group">
              <label for="exampleInputEmail1">Nickname</label>
              <input type="text" class="form-control" id="inlineFormInput" placeholder="e.g. Delo">
            </div>
            <div class="form-group">
              <label>About Me</label>
              <input type="text" class="form-control" placeholder="Tell something about yourself."> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Gender</label>
              <select class="custom-control custom-select">
                <option selected="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">College</label>
              <select class="custom-control custom-select">
                <option selected="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Organizations</label>
              <input type="text" class="form-control" id="inlineFormInput" placeholder="e.g. LSDC, Harlequin, Chorale">
            </div>
            <div class="form-group">
              <label>Interests</label>
              <input type="text" class="form-control" placeholder="e.g. Star Wars, Taylor Swift, Board Games"> </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="submit" class="btn btn-info">Cancel</button>
            <div class="form-group">
              <label for="exampleInputEmail1">&nbsp;</label>
            </div>
            <button type="submit" class="btn btn-block btn-success">Subscribe to Premium</button>
            <button type="submit" class="btn btn-block btn-danger">Deactivate Account</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
-->
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>