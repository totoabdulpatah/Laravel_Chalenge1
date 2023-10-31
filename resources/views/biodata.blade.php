@extends('utama')
@section('nama_title',$nama)
@section('nama_lengkap',$nama)
@section('npm',$npm)
@section('status',$status)
@section('alamat',$alamat)
@section('noHp',$noHp)
@section('hobby')
@forelse ($hobby as $item)
    <li>{{$item}}</li>
    
@empty
    Tidak mempunyai hobby
@endforelse

@endsection
@section ('tabel_biodata')
ini ditampilkan dari section judul menu, dengan data : {{ $isi_data }}
    <br />
    <br />

    {{-- membuat code php pada file blade --}}
    @php
        $no = 1;
        // dummy data array objek untuk dipanggil tanpa menggunakan looping
        $data1 = (object) [
            'nama' => 'Toto Abdulpatah',
            'npm' => '2110631170146',
            'hobi' => 'Badminton',
        ];

        // dummy data untuk dipanggil menggunakan looping foreach dan forelse
        $data2 = [['nama' => 'Muhammad Hardiansyah', 'npm' => '2110631170148', 'hobi' => 'Lari dari kenyataan'], ['nama' => 'Reymen Mulana', 'npm' => '2110631170140', 'hobi' => 'Berenang ke tepian']];

        $data3 = [['nama' => 'Yoga Fauzan', 'npm' => '2110631170154', 'hobi' => 'Futsal Mania'], ['nama' => 'Septian', 'npm' => '2110631170089', 'hobi' => 'Main Moonton']];

        // dummy data array asosiatif untuk dipanggil tanpa menggunakan looping
        $data4 = [
            'nama' => 'Siti Saodah',
            'npm' => '2110631170153',
            'hobi' => 'Sepak Takrow',
        ];
    @endphp
    {{-- end membuat code php pada file blade --}}

    {{-- membuat if, elseif, else di file blade --}}
    @if ($isi_data == 1)
        Data diisi dengan angka 1 <br />
    @elseif ($isi_data > 1)
        Data diisi lebih dari 1 <br />
    @else
        Data tidak valid <br />
    @endif
    {{-- end membuat if, elseif, else di file blade --}}

    <br />
    <br />

    {{-- membuat looping for di file blade --}}
    @for ($i = 1; $i <= $isi_data; $i++)
        Ini data ke {{ $i }} <br />
    @endfor
    {{-- end membuat looping for di file blade --}}
    <br />
    <br />
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">NO</th>
            <th scope="col">NAMA</th>
            <th scope="col">NPM</th>
            <th scope="col">HOBI</th>
        </tr>
    </thead>
    <tbody>
        {{-- panggil data array objek --}}
        <tr>
            <td colspan="4">
                Untuk data array objek
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>{{ $data1->nama }}</td>
            <td>{{ $data1->npm }}</td>
            <td>{{ $data1->hobi }}</td>
        </tr>
        {{-- end panggil data array objek --}}

        {{-- panggil data array asosiatif --}}
        <tr>
            <td colspan="4">
                Untuk data array asosiatif
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>{{ $data4['nama'] }}</td>
            <td>{{ $data4['npm'] }}</td>
            <td>{{ $data4['hobi'] }}</td>
        </tr>
        {{-- end panggil data array asosiatif --}}

        {{-- panggil data array asosiatif menggunakan foreach --}}
        <tr>
            <td colspan="4">
                Untuk perulangan foreach
            </td>
        </tr>
        @foreach ($data2 as $v)
            <tr>
                <td>
                    {{ $no++ }}
                </td>
                <td>{{ $v['nama'] }}</td>
                <td>{{ $v['npm'] }}</td>
                <td>{{ $v['hobi'] }}</td>
            </tr>
        @endforeach
        {{-- end panggil data array asosiatif menggunakan foreach --}}

        {{-- panggil data array asosiatif menggunakan forelse --}}
        <tr>
            <td colspan="4">
                Untuk perulangan forelse
            </td>
        </tr>
        @forelse ($data3 as $v)
            <tr>
                <td>
                    {{ $no++ }}
                </td>
                <td>{{ $v['nama'] }}</td>
                <td>{{ $v['npm'] }}</td>
                <td>{{ $v['hobi'] }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">
                    Data tidak ada.
                </td>
            </tr>
        @endforelse
        {{-- end panggil data array asosiatif menggunakan forelse --}}
    </tbody>
</table>
@endsection