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
      <div class= "col-md-7 col-md-offset-2">
        
            <table class="table">
              <tr>
                <th>Name</th>
                <th>Wk 01</th>
                <th>Wk 02</th>
                <th>Wk 03</th>
                <th>Wk 04</th>
                <th>Wk 05</th>
                <th>Total</th>
                <th>Av Posn</th>
              </tr>
                   @foreach ($all_members as $member)
              <tr>
                       <td>  {{ $member->name }} </td>
                       <td>  {{$member->wk01}} </td>
                       <td>  {{$member->wk02}} </td>
                       <td>  {{$member->wk03}} </td>  
                       <td>  {{$member->wk04}} </td> 
                       <td>  {{$member->wk05}} </td> 
                       <td>  {{$member->getsum()}} </td> 

              </tr>
                   @endforeach
           </table>
         </div>
        </div>
  </body>
</html>