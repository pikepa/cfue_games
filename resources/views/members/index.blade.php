<!DOCTYPE html>
<html>
    <head>
        <title>Members</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> 
      
     </head>
  <body>
    <div class="container">
      <div class="page-header" >
          <h1>Members</h1>        
      </div>
          <ul class="list-group">

           @foreach ($all_members as $member)
            <li class="list-group-item">
              <h2 class="list-group-item-heading"> {{ $member->name }} </h2>
              <p class="list-group-item-text">
                <strong>Week 01 Position &nbsp </strong>{{$member->wk01}} <br>
                <strong>Week 02 Position &nbsp </strong>{{$member->wk02}} <br> 
                <strong>Week 03 Position &nbsp </strong>{{$member->wk03}} <br> 
                <strong>Week 04 Position &nbsp </strong>{{$member->wk04}} <br>
                <strong>Week 05 Position &nbsp </strong>{{$member->wk05}} 

              </p>
            </li>
           @endforeach
      </ul>
        </div>

  </body>
</html>