@extends('layouts.admin')
@section('content')
<div class="content">
    @can('party_detail_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.party-details.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.partyDetail.title_singular') }}
                </a>
                <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                    {{ trans('global.app_csvImport') }}
                </button>
                @include('csvImport.modal', ['model' => 'PartyDetail', 'route' => 'admin.party-details.parseCsvImport'])
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cruds.partyDetail.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-PartyDetail">
                            <thead>
                                <tr>
                                    <th width="10">

                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.party_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.gstin') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.phone_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.pan_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.place_of_supply') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.type_of_supply') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.gst_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.pincode') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.state') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.city') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.email') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.opening_balance') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.as_of_date') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.opening_balance_type') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.credit_limit') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.credit_limit_amount') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.payment_terms') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.ifsc_code') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.account_number') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.bank_name') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.branch') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.status') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($partyDetails as $key => $partyDetail)
                                    <tr data-entry-id="{{ $partyDetail->id }}">
                                        <td>

                                        </td>
                                        <td>
                                            {{ $partyDetail->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->party_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->gstin ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->phone_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->pan_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->place_of_supply ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PartyDetail::TYPE_OF_SUPPLY_SELECT[$partyDetail->type_of_supply] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PartyDetail::GST_TYPE_SELECT[$partyDetail->gst_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->pincode ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->state ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->city ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->email ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->opening_balance ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->as_of_date ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PartyDetail::OPENING_BALANCE_TYPE_SELECT[$partyDetail->opening_balance_type] ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PartyDetail::CREDIT_LIMIT_RADIO[$partyDetail->credit_limit] ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->credit_limit_amount ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->payment_terms ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->ifsc_code ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->account_number ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->bank_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $partyDetail->branch ?? '' }}
                                        </td>
                                        <td>
                                            {{ App\Models\PartyDetail::STATUS_SELECT[$partyDetail->status] ?? '' }}
                                        </td>
                                        <td>
                                            @can('party_detail_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.party-details.show', $partyDetail->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('party_detail_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.party-details.edit', $partyDetail->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('party_detail_delete')
                                                <form action="{{ route('admin.party-details.destroy', $partyDetail->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('party_detail_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.party-details.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-PartyDetail:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection