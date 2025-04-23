<div class="container">
    <div class="text-center">

        <table class="table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Wali Murid</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $siswa->nama }}</td>
                    <td>{{ $siswa->kelas }}</td>
                    <td>{{ $siswa->nama_ibu }}</td>
                    <td>{{ ucfirst($siswa->status) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Tambah Siswa</a>


    </div>
   
</div>

