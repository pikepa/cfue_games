@extends ('layout')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-offset-3  text-center">
          <h1>Team Games Participants</h1>        
        </div>
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
                       <td>  {{$member->myposition}} </td> 

              </tr>
                   @endforeach
           </table>
         </div>
        </div>
@stop