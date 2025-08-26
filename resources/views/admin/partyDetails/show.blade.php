@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.partyDetail.title') }}
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.party-details.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.party_name') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->party_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.gstin') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->gstin }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.phone_number') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->phone_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.pan_number') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->pan_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.place_of_supply') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->place_of_supply }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.type_of_supply') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PartyDetail::TYPE_OF_SUPPLY_SELECT[$partyDetail->type_of_supply] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.gst_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PartyDetail::GST_TYPE_SELECT[$partyDetail->gst_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.pincode') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->pincode }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.state') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->state }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.city') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->city }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.billing_address') }}
                                    </th>
                                    <td>
                                        {!! $partyDetail->billing_address !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.shipping_address') }}
                                    </th>
                                    <td>
                                        {!! $partyDetail->shipping_address !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.opening_balance') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->opening_balance }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.as_of_date') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->as_of_date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.opening_balance_type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PartyDetail::OPENING_BALANCE_TYPE_SELECT[$partyDetail->opening_balance_type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.credit_limit') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PartyDetail::CREDIT_LIMIT_RADIO[$partyDetail->credit_limit] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.credit_limit_amount') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->credit_limit_amount }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.payment_terms') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->payment_terms }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.ifsc_code') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->ifsc_code }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.account_number') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->account_number }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.bank_name') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->bank_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.branch') }}
                                    </th>
                                    <td>
                                        {{ $partyDetail->branch }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.notes') }}
                                    </th>
                                    <td>
                                        {!! $partyDetail->notes !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.partyDetail.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PartyDetail::STATUS_SELECT[$partyDetail->status] ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('admin.party-details.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
@endsection