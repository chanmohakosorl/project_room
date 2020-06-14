@extends('layout.admin')

@section('content')
     <div class="containter m-5">
       <h2 class="text-center text-bold text-info p-2">Room Information <hr></h2>
     <a href="{{url('create-room-info')}}" class="btn btn-primary btn-md">Add new</a>
      <table class="table table-bordered table-striped mt-3">
        <thead class="bg-secondary">
          <tr>
            <th>Room No</th>
            <th>Floor</th>
            <th>Rent Fee/Month</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        
        @foreach ($room_infos as $item)
        <tbody>
          <tr>
            <td>{{$item->room_no}}</td>
            <td>{{$item->floor}}</td>
            <td>{{$item->rent_fee}}</td>
            <td>{{$item->status}}</td>
            <td class="text-center">
              <a href="{{route('room-infos.edit',$item->id)}}"><i class="far fa-edit fa-lg text-pimary"></i></a>
              <!-- <a href=""><i class="far fa-trash-alt fa-lg text-danger"></i></a> -->
              <a href='#deleteModel' class="text-danger"data-id="{{$item->id}}" data-room_no="{{$item->room_no}}" data-toggle="modal" data-target="#deleteModel"><i class="far fa-trash-alt fa-lg text-danger"></i></a>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
     
        
@endsection

<div  id ="deleteModel" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-room_no" id="title_comment"></h5>
              
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">Are you want to delete this comment?</p>
              
              
            </div>
            <div class="modal-footer">
              
              <form id ="fModal" action="" method="DELETE">
                @csrf
               @method('DELETE')
               <button type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close">No</button>
               <button type="submit" class="btn btn-danger">Yes</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <script src="{{asset('js/app.js')}}"></script>
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
      <script>
          $('#deleteModel').on('show.bs.modal',function(event){
            var button = $(event.relatedTarget)
            var id =button.data('id');
            var room_no =button.data('room_no');
            // var body =button.data('body');
            var modal=$(this)
            modal.find('#title_comment').text(room_no)
            var url="room-infos/"+id;
            $('#fModal').attr('action',url);
          });

      </script>