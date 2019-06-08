<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navid">
    <span class="navbar-toggler-icon"></span>
    </button>

   <h4 class="text-light">Complaint Management System</h4>

    <div class="collapse navbar-collapse" id="navid">

        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
             <a class="nav-link" href="{{url('show')}}">Home</a>
          </li>
          <li>
            <a href="{{url('view_report')}}" class="nav-link">View Reply</a>
          </li>

          <li>
            <a class="nav-link" href="{{url('page')}}">View Report</a>
          </li>
    
          <li>
            <a href="{{url('change_password')}}" class="nav-link">Change Password</a>
          </li>
          <li>
            <a href="{{url('logout')}}" class="nav-link">Logout</a>
          </li>
        </ul>
    </div>
</nav>
