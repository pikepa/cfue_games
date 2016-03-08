@extends ('layouts.base')

@section('content')

    <div class="container">
      <div class="row">
        <div class="col-md-2 " >
        <img style="padding-top:30px" src="http://www.crossfitue.com/uploads/6/8/0/7/68076505/1454397327.png" class="img-responsive " alt="Responsive image">
      </div>
        <div class="col-sm-5 col-md-offset-1 text-center">
          <h1>Team Games Participants</h1>
           <h4 >Individual Positions</h4>
        </div>
    </div>

      <div class= "col-md-7 col-md-offset-2">
        
            <table class="table">
              <tr>
                <th>Team</th>
                <th>Name</th>
                <th>Wk 01</th>
                <th>Wk 02</th>
                <th>Wk 03</th>
                <th>Wk 04</th>
                <th>Wk 05</th>
                <th>Total</th>
              </tr>
                   @foreach ($all_members as $member)
              <tr>
                       <td>  {{ $member->team_id }} </td>
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
       @stop