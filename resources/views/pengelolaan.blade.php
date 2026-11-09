@extends('layouts.app')

@section('content')

<div class="page-header">
    <div>
        <h1>Pengelolaan Tugas</h1>
        <p>Kelola dan pantau daftar tugas kuliahmu.</p>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <div>
            <h2>Daftar Tugas</h2>
            <p>Berikut daftar tugas yang perlu kamu kerjakan.</p>
        </div>

        <span class="task-count">
            {{ count($tugas) }} Tugas
        </span>
    </div>

    <div class="table-wrapper">
        <table class="task-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Mata Kuliah</th>
                    <th>Nama Tugas</th>
                    <th>Deadline</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @forelse($tugas as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item['mata_kuliah'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['deadline'] }}</td>
                        <td>
                            <span class="status 
                                {{ $item['status'] == 'Selesai' ? 'done' : 
                                ($item['status'] == 'Proses' ? 'process' : 'pending') }}">
                                {{ $item['status'] }}
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="empty-data">
                            Belum ada tugas.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection