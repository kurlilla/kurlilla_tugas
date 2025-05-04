 

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" >
  Launch demo modal
</button> -->

<!-- Modal delete-->
<div class="modal fade" id="modalTugasDestroy{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title " id="exampleModalLabel">Hapus {{$title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
      <div class="modal-body text-left">
                <div class="row">
                    <div class="col-6">
                        Nama
                    </div>
                    <div class="col-6">
                        : {{$item->user->nama}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        email
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-primary"> {{$item->user->email}}</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        jabatan
                    </div>
                    <div class="col-6">
                    :
                        <span class="badge badge-info"> {{$item->user->jabatan}}</span>
                    </div>
                </div>
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form action="{{route ('tugasDestroy', $item->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        
      </div>
    </div>
  </div>
</div>

<!-- modal show -->
<div class="modal fade" id="modalTugasShow{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-info text-white">
        <h5 class="modal-title " id="exampleModalLabel">Detail {{$title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-white">&times;</span>
        </button>
      </div>
            <div class="modal-body text-left">
                <div class="row">
                    <div class="col-6">
                        Nama
                    </div>
                    <div class="col-6">
                        : {{$item->user->nama}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        email
                    </div>
                    <div class="col-6">
                        :
                        <span class="badge badge-primary"> {{$item->user->email}}</span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        jabatan
                    </div>
                    <div class="col-6">
                    :
                        <span class="badge badge-info"> {{$item->user->jabatan}}</span>
                    </div>
                </div>
            </div>

    </div>
  </div>
</div>