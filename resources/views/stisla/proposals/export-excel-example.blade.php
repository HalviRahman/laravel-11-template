<table>
  <thead>
    <tr>
      <th>{{ __('#') }}</th>
      <th class="text-center">{{ __('Judul Proposal') }}</th>
      <th class="text-center">{{ __('Status') }}</th>
      <th class="text-center">{{ __('File Proposal') }}</th>
      <th class="text-center">{{ __('Batas Akhir') }}</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->judul_proposal }}</td>
        <td>{{ $item->status }}</td>
        <td>{{ $item->file_proposal }}</td>
        <td>{{ $item->batas_akhir }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
