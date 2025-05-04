<h1 align="center">DATA USER</h1>
<h3 align="center">Tanggal {{$tanggal}}</h3>
<h3 align="center">Pukul {{$jam}}</h3>
<hr>
<table width="100%" border="1px" style="border-collapse:collapse;">
    <thead>
    <tr>
        <th width="20" align="center">No</th>
        <th width="20" align="center">Name</th>
        <th width="20" align="center">Email</th>
        <th width="20" align="center">Jabatan</th>
        <th width="20" align="center">Status</th>
    </tr>
    </thead>
    <tbody>
        @foreach($user as $item)
            <tr>
                <td align="center">{{$loop->iteration}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->email}}</td>
                <td align="center">{{$item->jabatan}}</td>
                @if($item->is_tugas == false)
                    <td align="center">belum ditugaskan</td>
                @else
                    <td align="center">sudah ditugaskan</td>
                @endif
                
            </tr>
        @endforeach
    </tbody>
</table>