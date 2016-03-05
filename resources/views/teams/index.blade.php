<!DOCTYPE html>
<html>
    <head>
        <title>Teams</title>
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> 
      
     </head>
  <body>
    <div class="container">
      <div class="page-header" >
          <h1>CFUE Open 2016 Teams</h1>        
      </div>
      <div class= "col-md-7 col-md-offset-2">
        

             @foreach ($all_teams as $team)
                 <h2>  {{ $team->teamname }} </h2>
                  <div class="table-responsive">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width:30%">Name</th>
                        <th>WK01</th>
                        <th>WK02</th>
                        <th>WK03</th>
                        <th>WK04</th>
                        <th>WK05</th>
                      </tr>
                      <tr></tr>
                      <ul>
                         @foreach($team->members as $member)
                        <td> {{ $member->name }} </td>
                        <td> {{ $member->wk01 }} </td>
                        <td> {{ $member->wk02 }} </td>
                        <td> {{ $member->wk03 }} </td>
                        <td> {{ $member->wk04 }} </td>
                        <td> {{ $member->wk05 }} </td>                    
                        </tr>
                        @endforeach
                       </ul>
                    </table>
                  </div>
              @endforeach
         </div>
        </div>
  </body>
</html>